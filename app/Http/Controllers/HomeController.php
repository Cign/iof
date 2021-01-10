<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Slider + partenaires + pubs
        /**
         *
         *  public function single_category($id){

        $cat = Categories::find($id);
        if($cat){
            return view('presentation/single_category')->with(['cat'=> $cat]);
        }else{
            return $this->error();
        }

    }


    public function send_message_contact(Request $request){
        try{
            $name = $request->name;
            $email = $request->email;
            $tel = $request->phone;
            $subject = $request->subject;
            $msg = $request->message;

            Mail::to('cfozao@gmail.com')
                ->send(new SendContact($name, $email, $tel, $subject, $msg));
        }catch (Exception $e){
            throw $e;
        }

    }

    public function list(){
        $list = Job::all()->where('status','!=', 0);
        return $list->toJson();
    }

    public function details($id){
        $list = Job::find($id);
        return $list->toJson();
    }

    public function add(Request $request){
        $title = $request->input('title');
        $description = $request->input('description');
        $date = Carbon::now();
        event(new Registered($id = DB::table('jobs')->insertGetId(
            ['title' => $title, 'description' => $description,  'created_at' => $date]
        )));
        return 'ok';
    }


    public function edit(Request $request, $id)
    {
        $title = $request->input('title');
        $description = $request->input('description');
        DB::table('jobs')->where('id', $id)->limit(1)->update(['title' => $title,'description' => $description]);
        // find your user by their email  // optional - to ensure only one record is updated.

        return 'ok';
    }

    //désctive un utilisateur
    public function delete(Request $request, $id)
    {
        $active = $request->input('active');
        DB::table('users')->where('id', $id)->limit(1)->update(['active' => $active]);
        return 'ok';
        $job = Job::findOrFail($id);
        $job->status = 0;
        $job->save();
        return ['message'=>'ok'];
    }





    --------
    class Application extends Model
{
    //
    protected $table = 'applications';

    public $with = ['job'];

    protected $fillable = [
        'cv', 'job_id', 'status', 'comment'
    ];

    public function job(){
        return $this->belongsTo('App\Job', 'job_id');
    }
}

-----------

@section('content')
    <prof_application  ></prof_application>
@endsection

----------VUE
<template>
    <div class="col-sm">
        <a  @click="openModal" class="btn btn-primary text-white" ><i class="icon ion-ios-add"></i>Add a job</a>
        <br><br>
        <div class="table-wrap">
            <table id="datable_1" class="table table-hover w-100 display pb-30">
                <thead>
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Creation date</th>
                    <th>Last update date</th>
                    <th>Action(s)</th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="j in jobs" :key="j.id">
                    <td>{{j.title}}</td>
                    <td>{{j.description}}</td>
                    <td>{{j.created_at}}</td>
                    <td>{{j.updated_at}}</td>
                    <td>
                        <a href="#" @click="jobedit(j.id)">
                            <i class="fa fa-edit blue" @click="openEditModal"></i>
                        </a>
                        /
                        <a href="#" @click="delete_job(j.id)">
                            <i class="fa fa-trash red"></i>
                        </a>
                    </td>
                </tr>
                </tbody>
                <tfoot>
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Creation date</th>
                    <th>Last update date</th>
                    <th>Action(s)</th>
                </tr>
                </tfoot>
            </table>
        </div>
        <!-- Add Modal forms-->
        <div class="modal fade" id="exampleModalForms" tabindex="-1" role="dialog" aria-labelledby="exampleModalForms" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Register job</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form @submit="add">
                            <div>
                                <p v-if="errors.length" >
                                    <b>Veuillez corrigez les erreurs suivantes:</b>
                                <ul>
                                    <li v-for="error in errors">{{ error }}</li>
                                </ul>
                                </p>
                            </div>
                            <div class="form-group">
                                <label for="title">Job title</label>
                                <input v-model="fields.title" id="title" name="title" class="form-control" placeholder="Job's title" required>
                            </div>
                            <div class="">
                                <label>Description</label>
                                <vue-editor v-model="fields.description" />
                            </div>
                            <button type="submit" class="btn btn-primary">Add</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Edit Modal forms-->
        <div class="modal fade" id="editModalForms" tabindex="-1" role="dialog" aria-labelledby="editModalForms" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit a  job</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form @submit="update" method="POST">
                            <div>
                                <p v-if="errors.length" >
                                    <b>Veuillez corrigez les erreurs suivantes:</b>
                                <ul>
                                    <li v-for="error in errors">{{ error }}</li>
                                </ul>
                                </p>
                            </div>
                            <div class="form-group">
                                <label for="utitle">Job title</label>
                                <input v-model="job.title" id="utitle" name="title" class="form-control" placeholder="Job's title" required>
                            </div>
                            <div class="">
                                <label>Description</label>
                                <vue-editor v-model="job.description" />
                            </div>
                            <button type="submit" class="btn btn-primary">Edit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</template>

<script>
    import { VueEditor } from "vue2-editor";
    export default {
        components: { VueEditor },
        data(){
            return {
                errors: [],
                jobs:{},
                fields:{},
                job: {},
            }
        },

        created() {
            this.all_jobs();
        },

        methods:{
            openModal(){
                $('#exampleModalForms').modal('show');
            },
            openEditModal(){
                $('#editModalForms').modal('show');
            },
            all_jobs(){
                axios.get('job/list').then(resp =>{
                    this.jobs = resp.data
                }).catch(function(error){
                    console.log(error)
                })
            },
            add: function (e) {

                this.errors = [];

                if (this.fields.role == "" ) {
                    this.errors.push('The role cant be empty');
                }
                if(this.errors.length == 0){
                    Swal.fire({
                        text: "Create a new job ?",
                        type: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes',
                        cancelButtonText: 'No'
                    }).then((result) => {
                        if(result.value==true){
                            axios.post('job/add', this.fields).then(r => {
                                this.field = {}
                                Fire.$emit('ApresCreation');

                                this.all_jobs();
                                Swal.fire(
                                    'Created!',
                                    'Role created successfully!',
                                    'success'
                                ).then(()=>{
                                    $('#exampleModalForms').modal('hide');
                                    $('.modal-backdrop').remove();
                                    window.location.reload();
                                })
                            }).catch(function(err){
                                console.log("erreur",err)
                            })
                        }

                    })}

                e.preventDefault();
            },
            jobedit: function(id) {
                axios.get('job/details/'+id).then(resp =>{
                    this.job = resp.data
                }).catch(function(error){
                    console.log(error)
                })
            },
            update: function(e){
                Swal.fire({
                    text: "Want to update role's data ?",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes',
                    cancelButtonText: 'No'
                }).then((result) => {
                    if(result.value==true){
                        axios.post('job/edit/'+this.job.id, this.job).then(r => {
                            Fire.$emit('ApresModification');
                            this.job = {}
                            Swal.fire(
                                'Updated!',
                                'Role updated successfully',
                                'success'
                            ).then(()=>{
                                $('#editModalForms').modal('hide');
                                $('.modal-backdrop').remove();
                                window.location.reload();
                            })
                            this.job = {}
                        }).catch(function(err){
                            console.log("erreur",err)
                        })
                    }
                })


                e.preventDefault();
            },
            delete_job(id){

                Swal.fire({
                    text: "Want to delete the job ?",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes',
                    cancelButtonText: 'No'
                }).then((result) => {
                    if(result.value==true){
                        axios.post('job/'+id).then(resp =>{

                            Fire.$emit('ApresSuppression');
                            Swal.fire(
                                'Deleted!',
                                'Role suppressed successfully',
                                'success'
                            ).then(()=>{
                                window.location.reload();
                            })


                        }).catch(function(error){
                            console.log(error)
                        })
                    }
                })
            },
        },
        mounted() {
            console.log('Mounted Nigga')
        },
    }
</script>

---------------
import navigation_course from './components/courses/Navigation'
import contact from './components/Contact'
import schedule_courses from './components/courses/ScheduleCourses'

const app = new Vue({
    el: '#app',
    store: store,
    components:{
        list_category,most_popular,most_popular_cat,calendar_course

    }
});

----
migration create: Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });


        maj: Schema::table('users', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->boolean('active')->default(true);
            $table->integer('role_id');
        });
         */
        return view('home');
    }

    /**
     * Custom stuff
     */
    public function bourse()
    {
        //
        return view('Bourse/index');
    }

    public function orientation()
    {
        //
        return view('Orientation/index');
    }

    public function formation()
    {
        //
        return view('Formation/index');
    }

    public function contact()
    {
        //
        return view('contact');
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

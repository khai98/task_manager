<?php

namespace App\Http\Controllers;


use App\Model\TaskModel;
use Illuminate\Http\Request;

class TaskController extends Controller
{

    public function index()
    {
        $lists = TaskModel::all();
        return view('index', ['users' => $lists]);
    }

    public function delete( $id)
    {

        $delete = TaskModel::find($id);
        $delete-> delete();
        return redirect()->route('index');


    }

    public function create(Request $request)
    {
        dd($request);

//
//        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
//
//                $NAME = $_POST['NAME'];
//                $ADDRESS = $_POST['ADDRESS'];
//                $PHONE  = $_POST['PHONE'];
//                $EMAIL = $_POST['EMAIL'];
//
//                echo $NAME;
//
//            return view('addview');
//
//        }


    }

    public function edit($id)
    {
        $edit = TaskModel::find($id);
        $edit->title =


    }


    public function update(Request $request, TaskModel $taskModel)
    {


    }

}

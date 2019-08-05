<?php

namespace App\Http\Controllers;

use App\Account;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class AccountController extends Controller
{

    public function login()
    {
        return view('login');
    }

    public function menu()
    {
        return view('menu');
    }

    public function processLogin(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        $data = [
            'email' => $email,
            'password' => $password
        ];
        return view('login-success', $data);
    }

    public function register()
    {
        return view('register');
    }

    public function processRegister(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        $address = $request->address;
        $status = $request->status;
        $data = [
            'email' => $email,
            'password' => $password,
            'address' => $address,
            'status' => $status
        ];
        $account = new Account();
        $account->email = $request->email;
        $account->password = $request->password;
        $account->address = $request->address;
        $account->status = $request->status;

        $account->save();
        return view('register-success', $data);
    }

    public function getAllAccount()
    {
//        $listAccount = Account::all();
        $listAccount = Account::paginate(1);
        $data = [
            'listAccount' => $listAccount
        ];
        return view('list-account', $data);
    }

    public function getAccountById($id)
    {
        $existAccount = Account::find($id);
        $data = [
            'existAccount' => $existAccount
        ];
        return view('account-detail', $data);
    }
//    public function store(Request $request)
//    {
//        try {
//            $this->validate($request, [
//                'email' => 'required',
//                'password' => 'required',
//                'address' => 'required',
//            ]);
//        } catch (ValidationException $e) {
//        }
//        $users = new Account([
//            'userId' => $request->get('userId'),
//            'email' => $request->get('email'),
//            'password' => $request->get('password'),
//            'address' => $request->get('address'),
//            'status' => $request->get('status'),
//        ]);
//
//        $users->save();
//        return view('register-success');
//    }
//
//    public function insert(Request $request)
//    {
//        DB::table('users')->insert(
//            ['email' => $request->get('email'), 'password' => $request->get('password'), 'address' => $request->get('address')]
//        );
//    }
//
//    public function select(Request $request){
//        $users = DB::table('users')->select('email', 'password') ->where('userId', 1) ->get();
//        echo '<pre>';
//        print_r($users);
//        echo '</pre>';
//    }

//    public function select(Request $request){
//        $users = Account::all()->toArray();
//        echo '<pre>';
//        print_r($users);
//        echo '</pre>';
//    }


}

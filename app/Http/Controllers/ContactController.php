<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//подключаем файл с валидацией
use App\Http\Requests\ContactRequest;
//подключаем модель
use App\Models\Contact;

class ContactController extends Controller
{
    //функция без подключения отдельного файла
    // public function submit(Request $req)
    public function submit(ContactRequest $req)

    {
        //Модель и передача в бд
        $contact = new Contact();
        $contact->name = $req->input('name');
        $contact->email = $req->input('email');
        $contact->subject = $req->input('subject');
        $contact->message = $req->input('message');
        //занесение в бд
        $contact->save();
        //переадресация
        return redirect()->route('home')->with('success','Сообщение было добавлено');


        //ВАРИАНТЫ ВАЛИДАЦИИ на месте без подключения ContactRequest
        //return "Okay!";
        //dd($req);
        //dd($req->input('subject'));//один параметр по ключу

        // $validation=$req->validate([
        //     'subject'=>'required|min:5|max:50',
        //     'message'=>'required|min:15|max:500'
        // ]);
        //************************* */
        // $this->validate($req, [
        //     'subject' => 'required|min:5|max:50',
        //     'message' => 'required|min:15|max:500'
        // ]);
        /******************************* */
        // https://laravel.com/docs/7.x/validation
        // $req->validate([
        //     'subject'=>'required'
        // ]);

        //return $req->input();
    }
    //функция вывода сообщений
    public function allData(){
        // $contact=new Contact();
        // $contact=new Contact;
        // $contact= Contact::all();

        // dd($contact->all());
        // dd($contact);
        // dd(Contact::all());

        return view('messages',['data'=>Contact::all()]);

        // одну запись
        // $contact=new Contact;
        // return view('messages',['data'=>$contact->find(2)]);
        //в случ порядке и надо указать количество
        // return view('messages',['data'=>[$contact->inRandomOrder()->first()]]);
        //все
        // return view('messages',['data'=>$contact->inRandomOrder()->get()]);
        // сортировка по столбцу
        // return view('messages',['data'=>$contact->orderBy('id','desc')->get()]); //asc
        // limit  скип пропускает
        // return view('messages',['data'=>$contact->orderBy('id','desc')->skip(1)->take(1)->get()]); //asc
        // условие
        // return view('messages',['data'=>$contact->where('subject','=','suppppa')->get()]);
        // = <> > < >= <=
    }
    public function showOneMessage($id){
        $contact=new Contact;
        return view('one-message',['data'=>$contact->find($id)]);
    }
    public function updateMessage($id){
        $contact=new Contact;
        return view('update-message',['data'=>$contact->find($id)]);
    }

    public function updateMessageSubmit($id,ContactRequest $req)

    {
        //Модель и передача в бд
        $contact =  Contact::find($id);
        $contact->name = $req->input('name');
        $contact->email = $req->input('email');
        $contact->subject = $req->input('subject');
        $contact->message = $req->input('message');
        //занесение в бд
        $contact->save();
        //переадресация
        return redirect()->route('contact-data-one',$id)->with('success','Сообщение было обновлено');

    }
    public function deleteMessage($id){
        Contact::find($id)->delete();
        return redirect()->route('contact-data')->with('success','Сообщение было убито');

    }
}

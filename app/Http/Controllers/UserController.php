<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class UserController extends Controller
{

    function index(): View
    {
        $user = User::all();
            return view('welcome',compact('user'))->with('i');

        }
    public function create(): View
    {
        return view('create');
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'first_name' => 'required|max:7',
        ],[
            'first_name' => 'من فضلك ادخل الاسم',
        ]);
        User::create($request->all());
        return redirect()->route('user.index')
        ->with('success','تمات اظافات اسم جديد');

    }
    public function show(User $user)
    {
        return view('show',compact('user'));
    }

    public function edit(User $user)
    {
        return view('edit',compact('user'));

    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'first_name' => 'required|max:9',
        ],[
            'first_name' => 'من فضلك ادخل الاسم',
        ]);

        $user->update($request->all());
        return redirect()->route('user.index')
        ->with('success','تم تعديل بنجاح');
}
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('user.index')
                        ->with('success','تم حذف بنجاح');  }


}

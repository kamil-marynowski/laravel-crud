<?php

namespace App\Http\Controllers;

use App\Helper\Active;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\View;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        $users = User::all()->where('active', '=', Active::YES);

        return View::make('user.list', [ 'users' => $users ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function create()
    {
        return View::make('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name'  => 'required',
            'email'     => 'required|email',
            'password'  => 'required|confirmed|min:6',
            'firstname' => 'required',
            'lastname'  => 'required',
            'role'      => 'required',
        ]);

        User::create([
            'name' => $request->post('name'),
            'email' => $request->post('email'),
            'password' => $request->post('password'),
            'firstname' => $request->post('firstname'),
            'lastname' => $request->post('lastname'),
            'role' => $request->post('role'),
        ]);

        return redirect()->route('user.index')
            ->with('success', __('user.create.successfully'));
    }

    /**
     * Display the specified resource.
     *
     * @param User $user
     * @return \Illuminate\Contracts\View\View
     */
    public function show(User $user)
    {

        return View::make('user.show')
            ->with('user', $user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param User $user
     * @return \Illuminate\Contracts\View\View
     */
    public function edit(User $user): \Illuminate\Contracts\View\View
    {

        return View::make('user.edit')
            ->with('user', $user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param User $user
     * @return RedirectResponse
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'firstname' => 'required',
            'lastname' => 'required',
            'password' => 'sometimes',
            'password-confirmation' => 'sometimes|required_with:password|same:password',
            'role' => 'required'
        ]);

        $data = trim($request->post('password')) == '' ? $request->except('password') : $request->all();
        $user->update($data);

        return redirect()->route('user.index')
            ->with('success', __('user.edit.successfully'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param User $user
     * @return RedirectResponse
     */
    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('user.index')
            ->with('success', __('user.delete.successfully'));
    }
}

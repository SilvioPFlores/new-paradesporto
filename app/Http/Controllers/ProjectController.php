<?php

namespace App\Http\Controllers;

use App\Models\Objective;
use App\Models\Role;
use App\Models\TeamMember;

class ProjectController extends Controller
{
    public function index()
    {
        $lang = app()->getLocale() === 'pt-br' ? 'pt' : app()->getLocale();

        $objectives = Objective::where('status', 'AT')->get();

        $coordinationRole = Role::find(1);
        $coordinator = TeamMember::where('role_id', 1)
            ->where('status', 'AT')
            ->with('pronoun')
            ->first();

        $roles = Role::where('status', 'AT')
            ->where('id', '>', 1)
            ->orderBy('order')
            ->with(['teamMembers.pronoun'])
            ->get();

        return view('pages.project', compact('objectives', 'coordinationRole', 'coordinator', 'roles', 'lang'));
    }
}

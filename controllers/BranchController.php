<?php

declare(strict_types=1);

namespace Controller;

class BranchController
{
    public function index():void{
        $branches = (new \App\Branch())->getBranches();
        loadView('dashboard/branches', ['branches' => $branches]);
    }
}
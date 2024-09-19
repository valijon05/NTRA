<?php

declare(strict_types=1);

$branches = (new \App\Branch())->getBranches();

loadView('dashboard/branches_user', ['branches' => $branches]);



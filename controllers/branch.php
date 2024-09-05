<?php

declare(strict_types=1);

$branch=(new \App\Branch())->getBranches();

loadView('branch',['branch'=>$branch]);
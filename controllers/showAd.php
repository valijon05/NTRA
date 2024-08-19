<?php

declare(strict_types=1);
/**
 * @var $id
 */
$ad = (new \App\Ads())->getAd($id);

loadView('single-ad', ['ad' => $ad]);

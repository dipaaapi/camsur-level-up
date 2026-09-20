<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class AuthPortalLayout extends Component
{
    public function __construct(
        public ?string $title = null,
        public ?string $portalTitle = null,
        public ?string $portalSubtitle = null,
    ) {}

    /**
     * Get the view / contents that represents the component.
     */
    public function render(): View
    {
        return view('layouts.auth-portal');
    }
}

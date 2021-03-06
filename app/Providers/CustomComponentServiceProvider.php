<?php

namespace SET\Providers;

use Form;
use Illuminate\Support\ServiceProvider;

class CustomComponentServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        Form::component('multipleFiles', 'components.form.multiple_files', ['id']);
        Form::component('selectBox', 'components.form.select_box', ['label', 'name', 'list' => [], 'multiple' => false]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}

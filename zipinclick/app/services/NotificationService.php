<?php

namespace App\Services;

class NotificationService
{



    public static function CREATED($message = null)
    {
        notyf()->success($message ?? __('Created Successfully'));

    }

    public static function UPDATED($message = null)
    {
        notyf()->success($message ??__('Updated Successfully'));

    }

    public static function DELETED($message = null)
    {
        notyf()->success($message ??__('Deleted Successfully'));

    }
    public static function ERROR($message = null)
    {
        notyf()->error($message ?? __('Something went wrong'));

    }

}


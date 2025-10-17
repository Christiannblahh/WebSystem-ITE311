<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AnnouncementModel;

class Announcement extends BaseController
{
    public function index()
    {
        $model = new AnnouncementModel();

        // fetch all announcements, newest first
        $data['announcements'] = $model
            ->orderBy('created_at', 'DESC')
            ->findAll();

        // pass to view
        echo view('template', ['title' => 'Announcements', 'content' => view('announcements', $data)]);
        // OR if you use sections, just render view directly:
        // return view('announcements', $data);
    }
}

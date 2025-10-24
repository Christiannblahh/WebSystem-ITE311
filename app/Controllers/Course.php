<?php

namespace App\Controllers;

use App\Models\EnrollmentModel;
use CodeIgniter\Controller;

class Course extends Controller
{
    public function enroll()
    {
        $session = session();

        // Check if user is logged in
        if (!$session->has('userID')) {
            return $this->response->setJSON([
                'status' => 'error',
                'message' => 'User not logged in.'
            ]);
        }

        $user_id = $session->get('userID');
        $course_id = $this->request->getPost('course_id');

        if (!$course_id) {
            return $this->response->setJSON([
                'status' => 'error',
                'message' => 'No course selected.'
            ]);
        }

        $enrollmentModel = new EnrollmentModel();

        // Check if already enrolled
        if ($enrollmentModel->isAlreadyEnrolled($user_id, $course_id)) {
            return $this->response->setJSON([
                'status' => 'error',
                'message' => 'You are already enrolled in this course.'
            ]);
        }

        // Enroll the user
        $data = [
            'user_id' => $user_id,
            'course_id' => $course_id,
            'enrollment_date' => date('Y-m-d H:i:s')
        ];

        if ($enrollmentModel->enrollUser($data)) {
            return $this->response->setJSON([
                'status' => 'success',
                'message' => 'Enrollment successful.'
            ]);
        } else {
            return $this->response->setJSON([
                'status' => 'error',
                'message' => 'Enrollment failed. Please try again.'
            ]);
        }
    }
}
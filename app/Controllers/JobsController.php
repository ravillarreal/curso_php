<?php

namespace App\Controllers;

use App\Models\Job;
use Respect\Validation\Validator as v;

class JobsController extends BaseController {
    public function getAddJob($request) {

        $responseMessage = null;

        return $this->renderHTML('addJob.twig', [
            'responseMessage' => $responseMessage
        ]);
    }

    public function postSaveJob($request) {
        $postData = $request->getParsedBody();
            $jobValidator = v::key('title', v::stringType()->notEmpty())
            ->key('description', v::stringType()->notEmpty());
            
            try {
                $jobValidator->assert($postData);
                $files = $request->getUploadedFiles();
                $logo = $files['logo'];

                if ($logo->getError() == UPLOAD_ERR_OK) {
                    $fileName = $logo->getClientFilename();
                    $logo->moveTo("uploads/$fileName");
                    $img = "uploads/$fileName";
                }
                $job = new Job();
                $job->title = $postData['title'];
                $job->description = $postData['description'];
                $job->img = $img;
                $job->save();
                $responseMessage = 'Saved';
            } catch (\Exception $e) {
                $responseMessage = $e->getMessage();
            }

            return $this->renderHTML('addJob.twig', [
                'responseMessage' => $responseMessage
            ]);
    }
}
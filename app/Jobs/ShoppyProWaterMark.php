<?php

namespace App\Jobs;

use App\Models\Image;
use Illuminate\Bus\Queueable;
use Spatie\Image\Manipulations;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Google\Cloud\Vision\V1\ImageAnnotatorClient;

class ShoppyProWaterMark implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $announcement_image_id;

    private $w;
    private $h;
   
   
    public function __construct($announcement_image_id, $w,$h)
    {
        $this->announcement_image_id = $announcement_image_id;
        $this->w = $w;
        $this->h = $h;
    }


    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $w = $this->w;
        $h = $this->h;

        $i = Image::find($this->announcement_image_id);

        if (!$i) {
            return;
        }

        $srcPath = storage_path('app/public/' . $i->path);
        $images = file_get_contents($srcPath);
       
        foreach ($images as $image){
            $vertices = $image->getBoundingPoly()->getVertices();

            $bounds = [];
            foreach ($vertices as $vertex) {
                $bounds[] = [$vertex->getX(), $vertex->getY()];
            }

            $w = $bounds[2][0] - $bounds[0][0];
            $h = $bounds[2][1] - $bounds[0][1];
            
        $image->watermark(base_path('resources/img/iconss.png'))
        ->watermarkPosition('top-left')
        ->watermarkOpacity(50)
        ->watermarkPadding(10, 10, Manipulations::UNIT_PERCENT)
        ->watermarkWidth($w, Manipulations::UNIT_PIXELS)
        ->watermarkHeight($w, Manipulations::UNIT_PIXELS)
        ->watermarkFit(Manipulations::FIT_STRETCH);
        $image->save($srcPath);
    }
}
}


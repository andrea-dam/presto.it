<?php

namespace App\Jobs;

use App\Models\Image;
use Illuminate\Bus\Queueable;
use Spatie\Image\Manipulations;
use Illuminate\Queue\SerializesModels;
use Spatie\Image\Image as SpatieImage;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;


class WaterMark implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */

    private $item_image_id;

    public function __construct($item_image_id)
    {
        $this->item_image_id = $item_image_id;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $i = Image::find($this->item_image_id);

        if (!$i) {
            return;
        }


        $srcPath = storage_path('app/public/' . $i->path);
        // $image = file_get_contents($srcPath);
        $image = SpatieImage::load($srcPath);

            $image->watermark('resources/img/logo.png')
                //   ->watermarkOpacity(30)
                  ->watermarkPosition(Manipulations::POSITION_CENTER)
                  ->watermarkHeight(100, Manipulations::UNIT_PERCENT)
                  ->watermarkWidth(100, Manipulations::UNIT_PERCENT)  
                  ->save($srcPath);


    }
}

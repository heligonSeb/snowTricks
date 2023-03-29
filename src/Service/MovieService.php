<?php 
namespace App\Service;

use Exception;

class MovieService 
{
    public function __construct()
    {

    }

    /**
     * extract param src from iframe html
     */
    public function extractPath(string $balise): string
    {
        $paramBalise = explode('" ', $balise);

        $src = null;

        foreach ($paramBalise as $value) {
            if (str_contains($value, 'src')) {
                $src = explode('"', $value);
            }
        }

        if (!$src) {
            throw new Exception("no src param in the balise");
        }

        return $src[1];
    }
}

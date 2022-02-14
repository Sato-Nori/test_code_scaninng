<?php

namespace Exceedone\Exment\Storage\Adapter;

use League\Flysystem\Adapter\Ftp;

class ExmentAdapterFtp extends Ftp implements ExmentAdapterInterface
{
    use AdapterTrait;
    
    /**
     * get adapter class
     */
    public static function getAdapter($app, $config, $driverKey)
    {
        $mergeFrom = array_get($config, 'mergeFrom');
        $mergeConfig = static::mergeFileConfig('filesystems.disks.ftp', "filesystems.disks.$mergeFrom", $mergeFrom);
        $mergeConfig['driver'] = 'ftp';

        $driver = new self($mergeConfig);
        return $driver;
    }
    
    public static function getMergeConfigKeys(string $mergeFrom, array $options = []) : array
    {
        return [
            'root' => config('exment.rootpath.ftp.' . $mergeFrom),
        ];
    }
}

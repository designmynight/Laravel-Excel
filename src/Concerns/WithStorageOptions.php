<?php

namespace Maatwebsite\Excel\Concerns;

interface WithStorageOptions
{
    /**
     * @return string
     */
    public function storageOptions(): array;
}

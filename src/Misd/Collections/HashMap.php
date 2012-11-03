<?php

/*
 * This file is part of the Collections library.
 *
 * (c) University of Cambridge
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Misd\Collections;

/**
 * Hash-table-based implementation of {@link MapInterface}.
 *
 * This implementation provides all of the optional map operations, and permits
 * `null` values and the `null` key.
 *
 * This class makes no guarantees as to the order of the map; in particular, it
 * does not guarantee that the order will remain constant over time.
 *
 * @author Chris Wilkinson <chris.wilkinson@admin.cam.ac.uk>
 */
class HashMap extends AbstractMap
{
    /**
     * {@inheritdoc}
     */
    public function put($key, $value)
    {
        $hash = $this->hashKey($key);

        $this->values[$hash] = $value;
        $this->keys[$hash] = $key;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function putAll($map)
    {
        foreach ($map as $key => $value) {
            $this->put($key, $value);
        }

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function remove($key)
    {
        $hash = $this->hashKey($key);

        unset($this->values[$hash]);
        unset($this->keys[$hash]);

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function removeAll($keys)
    {
        foreach ($keys as $key) {
            $this->remove($key);
        }

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function clear()
    {
        $this->values = array();
        $this->keys = array();

        return $this;
    }
}

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

use Misd\Collections\Exception\UnsupportedOperationException;

/**
 * Collection.
 *
 * The root interface in the collection hierarchy. A collection represents a
 * group of objects, known as its elements.
 *
 * @author Chris Wilkinson <chris.wilkinson@admin.cam.ac.uk>
 */
interface CollectionInterface
{
    /**
     * Constructor.
     *
     * @param CollectionInterface|array $elements Optional initial elements.
     */
    public function __construct($elements = array());

    /**
     * Adds a single instance of an element to the collection.
     *
     * This is an optional operation.
     *
     * @param mixed $element Element to add to the collection.
     *
     * @return CollectionInterface A reference to the collection.
     *
     * @throws UnsupportedOperationException If the `add` operation is not supported by this collection.
     *
     * @see allAll
     */
    public function add($element);

    /**
     * Adds elements to the collection.
     *
     * This is an optional operation.
     *
     * @param CollectionInterface|array $elements Elements to add to the collection.
     *
     * @return CollectionInterface A reference to the collection.
     *
     * @throws UnsupportedOperationException If the `addAll` operation is not supported by this collection.
     *
     * @see add
     */
    public function addAll($elements);

    /**
     * Returns `true` if the collection contains a specified element.
     *
     * @param mixed $element Element to test.
     *
     * @return bool `true` if this collection contains the specified element, otherwise `false`.
     *
     * @see containsAll
     */
    public function contains($element);

    /**
     * Returns `true` if this collection contains all of the specified elements.
     *
     * @param CollectionInterface|array $elements Elements to test.
     *
     * @return bool `true` if this collection contains all of the specified elements, otherwise `false`.
     *
     * @see contains
     */
    public function containsAll($elements);

    /**
     * Removes a single instance of an element from this collection, if it is
     * present.
     *
     * This is an optional operation.
     *
     * @param mixed $element Element to be removed from this collection.
     *
     * @return CollectionInterface A reference to the collection.
     *
     * @throws UnsupportedOperationException If the `remove` operation is not supported by this collection.
     *
     * @see removeAll
     */
    public function remove($element);

    /**
     * Removes all instances of elements from the collection.
     *
     * This is an optional operation.
     *
     * @param CollectionInterface|array $elements Elements to be removed from this collection, if present.
     *
     * @return CollectionInterface A reference to the collection.
     *
     * @throws UnsupportedOperationException If the `retainAll` operation is not supported by this collection.
     *
     * @see remove
     */
    public function removeAll($elements);

    /**
     * Retains only the elements in this collection that are contained in the
     * specified collection. In other words, removes from this collection all
     * of its elements that are not contained in the specified collection.
     *
     * This is an optional operation.
     *
     * @param CollectionInterface|array $elements Elements to be retained in this collection.
     *
     * @return CollectionInterface A reference to the collection.
     *
     * @throws UnsupportedOperationException If the `retainAll` operation is not supported by this collection.
     *
     * @see remove, removeAll
     */
    public function retainAll($elements);

    /**
     * Removes all elements from this collection.
     *
     * This is an optional operation.
     *
     * @return CollectionInterface A reference to the collection.
     *
     * @throws UnsupportedOperationException If the `clear` operation is not supported by this collection.
     */
    public function clear();

    /**
     * Returns `true` if this collection contains no elements.
     *
     * @return bool `true` if this collection contains no elements, otherwise `false`.
     */
    public function isEmpty();

    /**
     * Returns an array containing all of the elements in this collection.
     *
     * @return array An array containing all of the elements in this collection.
     */
    public function toArray();
}
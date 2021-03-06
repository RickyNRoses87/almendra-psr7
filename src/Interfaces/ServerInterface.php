<?php

namespace Almendra\Http\Interfaces;

interface ServerInterface
{
    /**
     * Retrieves a value defined in the superglobal $_SERVER.
     *
     * @param string $value         The key's name.
     * @return string|mixed
     */
    public static function getValue($value, $default = '');

    /**
     * Retrieves all values defined in the superglobal $_SERVER.
     *
     * @return string|mixed
     */
    public static function getValues();

    /**
     * Returns a value from the $_GET superglobal.
     * Null if none exists.
     *
     * @param string $name         The value's name
     * @return mixed                 
     */
    public static function get($name);

    /**
     * Returns all values from the $_GET superglobal.
     * Null if none exists.
     *
     * @param array $values         An array containing value names to be retrieved         
     * @return mixed                 
     */
    public static function gets(array $values = null);

    /**
     * Returns a value from the $_POST superglobal.
     * Null if none exists.
     *
     * @param string $name         The value's name
     * @return mixed                 
     */
    public static function post($name);

    /**
     * Returns all values from the $_POST superglobal.
     * Null if none exists.
     *
     * @param array $values         
     * @return mixed                 
     */
    public static function posts(array $values = null);

    /**
     * Returns a value from the $_FILES superglobal.
     * Null if none exists.
     *
     * @param string $name         The value's name
     * @return mixed                 
     */
    public static function file($name);

    /**
     * Returns all values from the $_FILES superglobal.
     * Null if none exists.
     *
     * @param array $values         An array containing value names to be retrieved    
     * @return mixed                 
     */
    public static function files(array $values = null);
}

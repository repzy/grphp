<?php
/**
 * Copyright (c) 2017-present, BigCommerce Pty. Ltd. All rights reserved
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated
 * documentation files (the "Software"), to deal in the Software without restriction, including without limitation the
 * rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to
 * permit persons to whom the Software is furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the
 * Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE
 * WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR
 * COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR
 * OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 */
namespace Grphp\Client\Interceptors;

/**
 * Base interceptor class that can be extended to provide interception of client requests
 *
 * @package Grphp\Interceptors
 */
abstract class Base
{
    protected $options = [];
    protected $request;
    protected $method;
    protected $metadata;
    protected $stub;

    public function __construct(array $options = [])
    {
        $this->options = array_merge($this->options, $options);
    }

    abstract public function call(callable $callback);

    public function getRequest()
    {
        return $this->request;
    }

    public function setRequest(&$request)
    {
        $this->request = $request;
    }

    public function getMethod()
    {
        return $this->method;
    }

    public function setMethod(&$method)
    {
        $this->method = $method;
    }

    public function getMetadata()
    {
        return $this->metadata;
    }

    public function setMetadata(&$metadata = [])
    {
        $this->metadata = $metadata;
    }

    public function getOptions()
    {
        return $this->options;
    }

    public function setOptions(&$options = [])
    {
        $this->options = $options;
    }

    public function getStub()
    {
        return $this->stub;
    }

    public function setStub(&$stub)
    {
        $this->stub = $stub;
    }
}
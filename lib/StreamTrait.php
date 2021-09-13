<?php namespace SIKessEm\DocMan;

trait StreamTrait {

  protected $stream;

  public function setStream($stream) {

    if(!is_resource($stream)) throw new Error('Cannot use ' . gettype($stream) . ' as stream');

    return $this->stream = $stream;
  }

  public function getStream() {

    return $this->stream;
  }
}
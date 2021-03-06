<?php 
namespace OpenApi\classes\exception;

/**
 *  Gestisce le eccezioni relative alle funzionalit√† SMS
 * 400010: Si √® tentato di aggiungere dei recipienti, ma non √® presente l'id del messagggio
 */
class OpenApiSMSException extends OpenApiExceptionBase
{
  public function __construct($message, $code = 0, \Exception $previous = null) {
    parent::__construct($message, $code, $previous);
  }
}
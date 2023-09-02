<?php
class BaseController
{
    
    // quando o método  chamado não existe
    public function __call($name, $arguments)
    {
        $this->sendOutput('', array('HTTP/1.1 404 Not Found'));
    }
 
    /**
     * Get querystring params.
     * 
     * @return array
     */
    //retorna um array, neste array vai o limit=1
    protected function getStringParams() : array
    {
        parse_str($_SERVER['QUERY_STRING'], $query);
        return $query;
    }
 
    /**
     * Send API output.
     *
     * @param mixed  $data
     * @param string $httpHeader
     */
    //verifica o cabeçalho
    protected function sendOutput($data, $httpHeaders=array())
    {
        header_remove('Set-Cookie');
 
        if (is_array($httpHeaders) && count($httpHeaders)) {
            foreach ($httpHeaders as $httpHeader) {
                header($httpHeader);
            }
        }
 
        echo $data;
        exit;
    }
}

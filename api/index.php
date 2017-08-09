<?php
$site = @$_GET['site'];

if (strpos($site, 'http://') !== false) {
	$versite = $site;
}
else if (strpos($site, 'https://') !== false) {
	$versite = $site;
}
else {
	$versite = "http://$site";
}

function code($site) {
  $headers = get_headers($site);
  return substr($headers[0], 9, 3);
}

$code = code($versite);

if ( $code == 100 ) {
	$one00 = array(
		'status' => 'Up',
		'code' => '100',
		'codeMeaning' => 'Continue',
		'inDepth' => 'Contuinue with request; initial part has been recieved, send the remainder part',
		'possibleFix' => 'Try resubmitting the request if you have submitted all parts'
	);
  echo json_encode($one00, JSON_PRETTY_PRINT);
}
else if ( $code == 101 ) {
	$one01 = array(
		'status' => 'Up',
		'code' => '101',
		'codeMeaning' => 'Switching Protocols',
		'inDepth' => 'The requester has asked the server to switch protocols and the server has agreed to do so.',
		'possibleFix' => 'Just wait, or resubmit'
	);
  echo json_encode($one01, JSON_PRETTY_PRINT);
}
else if ( $code == 102 ) {
	$one02 = array(
		'status' => 'Up',
		'code' => '102',
		'codeMeaning' => 'Processing',
		'inDepth' => 'This code indicates that the server has received and is processing the request, but no response is available yet.',
		'possibleFix' => 'Just wait, or resubmit'
	);
  echo json_encode($one02, JSON_PRETTY_PRINT);
}
else if ( $code == 200 ) {
	$two00 = array(
		'status' => 'Up',
		'code' => '200',
		'codeMeaning' => 'OK',
		'inDepth' => 'Everything is operational',
		'possibleFix' => 'None'
	);
  echo json_encode($two00, JSON_PRETTY_PRINT);
}
else if ( $code == 201 ) {
	$two01 = array(
		'status' => 'Up',
		'code' => '201',
		'codeMeaning' => 'Created',
		'inDepth' => 'The request has been fulfilled',
		'possibleFix' => 'None'
	);
  echo json_encode($two01, JSON_PRETTY_PRINT);
}
else if ( $code == 202 ) {
	$two02 = array(
		'status' => 'Up',
		'code' => '202',
		'codeMeaning' => 'Accepted',
		'inDepth' => 'The request has been accepted for processing, but the processing has not been completed',
		'possibleFix' => 'Just wait, or resubmit'
	);
  echo json_encode($two02, JSON_PRETTY_PRINT);
}
else if ( $code == 203 ) {
	$two03 = array(
		'status' => 'Up',
		'code' => '203',
		'codeMeaning' => 'Non-Authoritative Information',
		'inDepth' => 'The server is a transforming proxy that received a 200 OK, but is returning a modified version of the origin\'s response',
		'possibleFix' => 'None'
	);
  echo json_encode($two03, JSON_PRETTY_PRINT);
}
else if ( $code == 204 ) {
	$two04 = array(
		'status' => 'Up',
		'code' => '204',
		'codeMeaning' => 'No Content',
		'inDepth' => 'The server successfully processed the request and is not returning any content',
		'possibleFix' => 'Everything is done; nothing to worry about'
	);
  echo json_encode($two04, JSON_PRETTY_PRINT);
}
else if ( $code == 205 ) {
	$two05 = array(
		'status' => 'Up',
		'code' => '205',
		'codeMeaning' => 'Reset Content',
		'inDepth' => 'The server successfully processed the request, but is not returning any content; requires that the requester reset the document view.',
		'possibleFix' => 'None'
	);
  echo json_encode($two05, JSON_PRETTY_PRINT);
}
else if ( $code == 206 ) {
	$two06 = array(
		'status' => 'Up',
		'code' => '206',
		'codeMeaning' => 'Partial Content',
		'inDepth' => 'The server has fulfilled the partial GET request for the resource',
		'possibleFix' => 'None'
	);
  echo json_encode($two06, JSON_PRETTY_PRINT);
}
else if ( $code == 300 ) {
	$three00 = array(
		'status' => 'Up',
		'code' => '300',
		'codeMeaning' => 'Multiple Choices',
		'inDepth' => 'Indicates multiple options for the resource from which the client may choose',
		'possibleFix' => 'None'
	);
  echo json_encode($three00, JSON_PRETTY_PRINT);
}
else if ( $code == 301 ) {
	$three01 = array(
		'status' => 'Up',
		'code' => '301',
		'codeMeaning' => 'Moved Permanently',
		'inDepth' => 'The webpage has been moved somewhere else',
		'possibleFix' => 'Visit the webpage and re-enter the new URL to get status'
	);
  echo json_encode($three01, JSON_PRETTY_PRINT);
}
else if ( $code == 302 ) {
	$three02 = array(
		'status' => 'Up',
		'code' => '302',
		'codeMeaning' => 'Found',
		'inDepth' => 'The requested resource resides temporarily under a different URI.',
		'possibleFix' => 'Visit the webpage and re-enter the new URL to get status'
	);
  echo json_encode($three02, JSON_PRETTY_PRINT);
}
else if ( $code == 303 ) {
	$three03 = array(
		'status' => 'Up',
		'code' => '303',
		'codeMeaning' => 'See Other',
		'inDepth' => 'The response to the request can be found under another URI using a GET method. When received in response to a POST (or PUT/DELETE), the client should presume that the server has received the data and should issue a redirect with a separate GET message',
		'possibleFix' => 'None'
	);
  echo json_encode($three03, JSON_PRETTY_PRINT);
}
else if ( $code == 304 ) {
	$three04 = array(
		'status' => 'Up',
		'code' => '304',
		'codeMeaning' => 'Not Modified',
		'inDepth' => 'Indicates that the resource has not been modified since the version specified by the request headers',
		'possibleFix' => 'None'
	);
  echo json_encode($three04, JSON_PRETTY_PRINT);
}
else if ( $code == 305 ) {
	$three05 = array(
		'status' => 'Up',
		'code' => '305',
		'codeMeaning' => 'Use Proxy',
		'inDepth' => 'The requested resource is available only through a proxy',
		'possibleFix' => 'There are several online proxies from which you can pick'
	);
  echo json_encode($three05, JSON_PRETTY_PRINT);
}
else if ( $code == 307 ) {
	$three07 = array(
		'status' => 'Up',
		'code' => '307',
		'codeMeaning' => 'Temporary Redirect',
		'inDepth' => 'The webpage has been moved somewhere else temporarily',
		'possibleFix' => 'Visit the webpage and re-enter the new URL to get status'
	);
  echo json_encode($three07, JSON_PRETTY_PRINT);
}
else if ( $code == 400 ) {
	$four00 = array(
		'status' => 'Up',
		'code' => '400',
		'codeMeaning' => 'Bad Request',
		'inDepth' => 'Server could not understand the performed request',
		'possibleFix' => 'Check your request for errors then resubmit'
	);
  echo json_encode($four00, JSON_PRETTY_PRINT);
}

else if ( $code == 401 ) {
	$four01 = array(
		'status' => 'Up',
		'code' => '401',
		'codeMeaning' => 'Unauthorized',
		'inDepth' => 'The page you are trying to access needs authentication',
		'possibleFix' => 'Enter your password to obtain access'
	);
  echo json_encode($four01, JSON_PRETTY_PRINT);
}else if ( $code == 402 ) {
	$four02 = array(
		'status' => 'Up',
		'code' => '402',
		'codeMeaning' => 'Payment Required',
		'inDepth' => 'Reserved for future use',
		'possibleFix' => 'Unknown'
	);
  echo json_encode($four02, JSON_PRETTY_PRINT);
}else if ( $code == 403 ) {
	$four03 = array(
		'status' => 'Up',
		'code' => '403',
		'codeMeaning' => 'Forbidden',
		'inDepth' => 'The server understood the request, but is refusing to fulfill it',
		'possibleFix' => 'Do not retry your request unless you know there has been a change made; contact the admins'
	);
  echo json_encode($four03, JSON_PRETTY_PRINT);
}else if ( $code == 404 ) {
	$four04 = array(
		'status' => 'Up',
		'code' => '404',
		'codeMeaning' => 'Not Found',
		'inDepth' => 'The server did not find this web page',
		'possibleFix' => 'Recheck your entered URL or use a search engine to find the page'
	);
  echo json_encode($four04, JSON_PRETTY_PRINT);
}else if ( $code == 405 ) {
	$four05 = array(
		'status' => 'Up',
		'code' => '405',
		'codeMeaning' => 'Method Not Allowed',
		'inDepth' => 'A request method is not supported for the requested resource',
		'possibleFix' => 'None'
	);
  echo json_encode($four05, JSON_PRETTY_PRINT);
}else if ( $code == 406 ) {
	$four06 = array(
		'status' => 'Up',
		'code' => '406',
		'codeMeaning' => 'Not Acceptable',
		'inDepth' => 'The requested resource is capable of generating only content not acceptable according to your request',
		'possibleFix' => 'Modify your request to meet the needs if listed'
	);
  echo json_encode($four06, JSON_PRETTY_PRINT);
}else if ( $code == 407 ) {
	$four07 = array(
		'status' => 'Up',
		'code' => '407',
		'codeMeaning' => 'Proxy Authentication Required',
		'inDepth' => 'The client must first authenticate itself with the proxy',
		'possibleFix' => 'Make sure you have authenticated yourself with the proxy'
	);
  echo json_encode($four07, JSON_PRETTY_PRINT);
}else if ( $code == 408 ) {
	$four08 = array(
		'status' => 'Up',
		'code' => '408',
		'codeMeaning' => 'Request Timeout',
		'inDepth' => 'The server timed out waiting for the request',
		'possibleFix' => 'Retry the request, but be more swift'
	);
  echo json_encode($four08, JSON_PRETTY_PRINT);
}else if ( $code == 409 ) {
	$four09 = array(
		'status' => 'Up',
		'code' => '409',
		'codeMeaning' => 'Conflict',
		'inDepth' => 'Request not completed because of a conflict',
		'possibleFix' => 'None'
	);
  echo json_encode($four09, JSON_PRETTY_PRINT);
}else if ( $code == 410 ) {
	$four10 = array(
		'status' => 'Up',
		'code' => '410',
		'codeMeaning' => 'Gone',
		'inDepth' => 'Indicates that the resource requested is no longer available and will not be available again',
		'possibleFix' => 'None'
	);
  echo json_encode($four10, JSON_PRETTY_PRINT);
}else if ( $code == 411 ) {
	$four11 = array(
		'status' => 'Up',
		'code' => '411',
		'codeMeaning' => 'Length Required',
		'inDepth' => 'No length was defined, so the server will not accept content',
		'possibleFix' => 'None'
	);
  echo json_encode($four11, JSON_PRETTY_PRINT);
}else if ( $code == 412 ) {
	$four12 = array(
		'status' => 'Up',
		'code' => '412',
		'codeMeaning' => 'Precondition Failed',
		'inDepth' => 'The precondition given in one or more of the request-header fields evaluated to false when it was tested on the server',
		'possibleFix' => 'None'
	);
  echo json_encode($four12, JSON_PRETTY_PRINT);
}else if ( $code == 413 ) {
	$four13 = array(
		'status' => 'Up',
		'code' => '413',
		'codeMeaning' => 'Request Entity Too Large',
		'inDepth' => 'The server is refusing to process a request because the request entity is larger than the server is willing or able to process',
		'possibleFix' => 'Visit the webpage and re-enter the new URL to get status'
	);
  echo json_encode($four13, JSON_PRETTY_PRINT);
}else if ( $code == 414 ) {
	$four14 = array(
		'status' => 'Up',
		'code' => '414',
		'codeMeaning' => 'URI Too Long',
		'inDepth' => 'The server is refusing to service the request because the Request-URI is longer than the server is willing to interpret',
		'possibleFix' => 'None'
	);
  echo json_encode($four14, JSON_PRETTY_PRINT);
}else if ( $code == 415 ) {
	$four15 = array(
		'status' => 'Up',
		'code' => '415',
		'codeMeaning' => 'Unsupported Media Type',
		'inDepth' => 'The request entity has a media type which the server or resource does not support',
		'possibleFix' => 'None'
	);
  echo json_encode($four15, JSON_PRETTY_PRINT);
}else if ( $code == 416 ) {
	$four16 = array(
		'status' => 'Up',
		'code' => '416',
		'codeMeaning' => 'Range Not Satisfiable',
		'inDepth' => 'The client asked for a part of a file that lies beyond the end of the file',
		'possibleFix' => 'None'
	);
  echo json_encode($four16, JSON_PRETTY_PRINT);
}else if ( $code == 417 ) {
	$four17 = array(
		'status' => 'Up',
		'code' => '417',
		'codeMeaning' => 'Expectation Failed',
		'inDepth' => 'The webpage has been moved somewhere else temporarily',
		'possibleFix' => 'None'
	);
  echo json_encode($four17, JSON_PRETTY_PRINT);
}else if ( $code == 418 ) {
	$four17 = array(
		'status' => 'Up',
		'code' => '418',
		'codeMeaning' => 'I\'m a teapot',
		'inDepth' => 'This code was defined in 1998 as one of the traditional IETF April Fools\' jokes, in RFC 2324, Hyper Text Coffee Pot Control Protocol, and is not expected to be implemented by actual HTTP servers. The RFC specifies this code should be returned by teapots requested to brew coffee.',
		'possibleFix' => 'Just laugh it off'
	);
  echo json_encode($four17, JSON_PRETTY_PRINT);
}
else if ( $code == 500 ) {
	$five00 = array(
		'status' => 'Up',
		'code' => '500',
		'codeMeaning' => 'Internal Server Error',
		'inDepth' => 'The server encountered an unexpected condition which prevented it from fulfilling the request',
		'possibleFix' => 'None'
	);
  echo json_encode($five00, JSON_PRETTY_PRINT);
}
else if ( $code == 501 ) {
	$five01 = array(
		'status' => 'Up',
		'code' => '501',
		'codeMeaning' => 'Not Implemented',
		'inDepth' => 'The server does not support the functionality required to fulfill the request',
		'possibleFix' => 'None'
	);
  echo json_encode($five01, JSON_PRETTY_PRINT);
}
else if ( $code == 502 ) {
	$five02 = array(
		'status' => 'Up',
		'code' => '502',
		'codeMeaning' => 'Bad Gateway',
		'inDepth' => 'The server was acting as a gateway or proxy and received an invalid response from the upstream server',
		'possibleFix' => 'None'
	);
  echo json_encode($five02, JSON_PRETTY_PRINT);
}
else if ( $code == 503 ) {
	$five03 = array(
		'status' => 'Up',
		'code' => '503',
		'codeMeaning' => 'Service Unavailable',
		'inDepth' => 'The server is currently unavailable (overloaded or down)',
		'possibleFix' => 'Wait until access is available'
	);
  echo json_encode($five03, JSON_PRETTY_PRINT);
}
else if ( $code == 504 ) {
	$five04 = array(
		'status' => 'Up',
		'code' => '504',
		'codeMeaning' => 'Gateway Timeout',
		'inDepth' => 'The server was acting as a gateway or proxy and did not receive a timely response from the upstream server',
		'possibleFix' => 'None'
	);
  echo json_encode($five04, JSON_PRETTY_PRINT);
}
else if ( $code == 505 ) {
	$five05 = array(
		'status' => 'Up',
		'code' => '505',
		'codeMeaning' => 'HTTP Version Not Supported',
		'inDepth' => 'The server does not support the HTTP protocol version used in the request',
		'possibleFix' => 'None'
	);
  echo json_encode($five05, JSON_PRETTY_PRINT);
}
else if ( $code == 511 ) {
	$five11 = array(
		'status' => 'Up',
		'code' => '511',
		'codeMeaning' => 'Network Authentication Required',
		'inDepth' => 'The client needs to authenticate to gain network access',
		'possibleFix' => 'None'
	);
  echo json_encode($five11, JSON_PRETTY_PRINT);
}
else {
	$error = array(
		'status' => 'Down',
		'code' => 'Unknown',
		'codeMeaning' => 'Working on this part',
		'inDepth' => 'Make sure your URL contains no illegal characters and is an actual website',
		'possibleFix' => 'Make sure your URL contains no illegal characters and is an actual website'
	);
  echo json_encode($error, JSON_PRETTY_PRINT);
}

?>
<?php
<<<<<<< HEAD
/**
 * File: Amazon S3
 * 	Amazon Simple Storage Service (http://aws.amazon.com/s3)
 *
 * Version:
 * 	2010.03.26
 *
 * Copyright:
 * 	2006-2010 Ryan Parman, Foleeo, Inc., and contributors.
 *
 * License:
 * 	Simplified BSD License - http://opensource.org/licenses/bsd-license.php
 *
 * See Also:
 * 	CloudFusion - http://getcloudfusion.com
 * 	Amazon S3 - http://aws.amazon.com/s3
=======
/*
 * Copyright 2010 Amazon.com, Inc. or its affiliates. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License").
 * You may not use this file except in compliance with the License.
 * A copy of the License is located at
 *
 *  http://aws.amazon.com/apache2.0
 *
 * or in the "license" file accompanying this file. This file is distributed
 * on an "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either
 * express or implied. See the License for the specific language governing
 * permissions and limitations under the License.
 */

/**
 * File: AmazonS3
 * 	Amazon S3 is a web service that enables you to store data in the cloud. You can then download the data
 * 	or use the data with other AWS services, such as Amazon Elastic Cloud Computer (EC2).
 *
 * 	Amazon Simple Storage Service (Amazon S3) is storage for the Internet. You can use Amazon S3 to store
 * 	and retrieve any amount of data at any time, from anywhere on the web. You can accomplish these tasks
 * 	using the AWS Management Console, which is a simple and intuitive web interface.
 *
 * 	To get the most out of Amazon S3, you need to understand a few simple concepts. Amazon S3 stores data
 * 	as objects in buckets. An object is comprised of a file and optionally any metadata that describes
 * 	that file.
 *
 * 	To store an object in Amazon S3, you upload the file you want to store to a bucket. When you upload a
 * 	file, you can set permissions on the object as well as any metadata.
 *
 * 	Buckets are the containers for objects. You can have one or more buckets. For each bucket, you can control
 * 	access to the bucket (who can create, delete, and list objects in the bucket), view access logs for the
 * 	bucket and its objects, and choose the geographical region where Amazon S3 will store the bucket and its
 * 	contents.
 *
 * 	Visit <http://aws.amazon.com/s3/> for more information.
 *
 * Version:
 * 	2010.09.27
 *
 * License and Copyright:
 * 	See the included NOTICE.md file for more information.
 *
 * See Also:
 * 	[Amazon Simple Storage Service](http://aws.amazon.com/s3/)
 * 	[Amazon Simple Storage Service documentation](http://aws.amazon.com/documentation/s3/)
>>>>>>> f89d276c08923c32850e8d991a1f67c0cc2e13cb
 */


/*%******************************************************************************************%*/
<<<<<<< HEAD
// CONSTANTS

/**
 * Constant: S3_LOCATION_US
 * 	Specify the US location.
 */
define('S3_DEFAULT_URL', 's3.amazonaws.com');

/**
 * Constant: S3_LOCATION_US
 * 	Specify the US location.
 */
define('S3_LOCATION_US', 'us-west-1');

/**
 * Constant: S3_LOCATION_EU
 * 	Specify the European Union (EU) location.
 */
define('S3_LOCATION_EU', 'eu');

/**
 * Constant: S3_ACL_PRIVATE
 * 	ACL: Owner-only read/write.
 */
define('S3_ACL_PRIVATE', 'private');

/**
 * Constant: S3_ACL_PUBLIC
 * 	ACL: Owner read/write, public read.
 */
define('S3_ACL_PUBLIC', 'public-read');

/**
 * Constant: S3_ACL_OPEN
 * 	ACL: Public read/write.
 */
define('S3_ACL_OPEN', 'public-read-write');

/**
 * Constant: S3_ACL_AUTH_READ
 * 	ACL: Owner read/write, authenticated read.
 */
define('S3_ACL_AUTH_READ', 'authenticated-read');

/**
 * Constant: S3_GRANT_READ
 * 	When applied to a bucket, grants permission to list the bucket. When applied to an object, this grants permission to read the object data and/or metadata.
 */
define('S3_GRANT_READ', 'READ');

/**
 * Constant: S3_GRANT_WRITE
 * 	When applied to a bucket, grants permission to create, overwrite, and delete any object in the bucket. This permission is not supported for objects.
 */
define('S3_GRANT_WRITE', 'WRITE');

/**
 * Constant: S3_GRANT_READ_ACP
 * 	Grants permission to read the ACL for the applicable bucket or object. The owner of a bucket or object always has this permission implicitly.
 */
define('S3_GRANT_READ_ACP', 'READ_ACP');

/**
 * Constant: S3_GRANT_WRITE_ACP
 * 	Gives permission to overwrite the ACP for the applicable bucket or object. The owner of a bucket or object always has this permission implicitly. Granting this permission is equivalent to granting FULL_CONTROL because the grant recipient can make any changes to the ACP.
 */
define('S3_GRANT_WRITE_ACP', 'WRITE_ACP');

/**
 * Constant: S3_GRANT_FULL_CONTROL
 * 	Provides READ, WRITE, READ_ACP, and WRITE_ACP permissions. It does not convey additional rights and is provided only for convenience.
 */
define('S3_GRANT_FULL_CONTROL', 'FULL_CONTROL');

/**
 * Constant: S3_USERS_AUTH
 * 	The "AuthenticatedUsers" group for access control policies.
 */
define('S3_USERS_AUTH', 'http://acs.amazonaws.com/groups/global/AuthenticatedUsers');

/**
 * Constant: S3_USERS_ALL
 * 	The "AllUsers" group for access control policies.
 */
define('S3_USERS_ALL', 'http://acs.amazonaws.com/groups/global/AllUsers');

/**
 * Constant: S3_USERS_LOGGING
 * 	The "LogDelivery" group for access control policies.
 */
define('S3_USERS_LOGGING', 'http://acs.amazonaws.com/groups/s3/LogDelivery');

/**
 * Constant: S3_PCRE_ALL
 * 	PCRE: Match all items
 */
define('S3_PCRE_ALL', '/.*/i');


/*%******************************************************************************************%*/
// EXCEPTIONS

/**
 * Exception: S3_Exception
 * 	Default S3 Exception.
 */
class S3_Exception extends Exception {}


/*%******************************************************************************************%*/
// MAIN CLASS

/**
 * Class: AmazonS3
 * 	Container for all Amazon S3-related methods. Inherits additional methods from CloudFusion.
 *
 * Extends:
 * 	CloudFusion
 */
class AmazonS3 extends CloudFusion
{
=======
// EXCEPTIONS

/**
 * Exception: S3_Exception
 * 	Default S3 Exception.
 */
class S3_Exception extends Exception {}


/*%******************************************************************************************%*/
// MAIN CLASS

/**
 * Class: AmazonS3
 * 	Container for all Amazon S3-related methods. Inherits additional methods from CFRuntime.
 */
class AmazonS3 extends CFRuntime
{
	/*%******************************************************************************************%*/
	// CLASS CONSTANTS

	/**
	 * Constant: DEFAULT_URL
	 * 	The default endpoint.
	 */
	const DEFAULT_URL = 's3.amazonaws.com';

	/**
	 * Constant: REGION_US_E1
	 * 	Specify the queue URL for the US-East (Northern Virginia) Region.
	 */
	const REGION_US_E1 = '';

	/**
	 * Constant: REGION_US_W1
	 * 	Specify the queue URL for the US-West (Northern California) Region.
	 */
	const REGION_US_W1 = 'us-west-1';

	/**
	 * Constant: REGION_EU_W1
	 * 	Specify the queue URL for the EU (Ireland) Region.
	 */
	const REGION_EU_W1 = 'EU';

	/**
	 * Constant: REGION_APAC_SE1
	 * 	Specify the queue URL for the Asia Pacific (Singapore) Region.
	 */
	const REGION_APAC_SE1 = 'ap-southeast-1';

	/**
	 * Constant: ACL_PRIVATE
	 * 	ACL: Owner-only read/write.
	 */
	const ACL_PRIVATE = 'private';

	/**
	 * Constant: ACL_PUBLIC
	 * 	ACL: Owner read/write, public read.
	 */
	const ACL_PUBLIC = 'public-read';

	/**
	 * Constant: ACL_OPEN
	 * 	ACL: Public read/write.
	 */
	const ACL_OPEN = 'public-read-write';

	/**
	 * Constant: ACL_AUTH_READ
	 * 	ACL: Owner read/write, authenticated read.
	 */
	const ACL_AUTH_READ = 'authenticated-read';

	/**
	 * Constant: ACL_OWNER_READ
	 * 	ACL: Bucket owner read.
	 */
	const ACL_OWNER_READ = 'bucket-owner-read';

	/**
	 * Constant: ACL_OWNER_FULL_CONTROL
	 * 	ACL: Bucket owner full control.
	 */
	const ACL_OWNER_FULL_CONTROL = 'bucket-owner-full-control';

	/**
	 * Constant: GRANT_READ
	 * 	When applied to a bucket, grants permission to list the bucket. When applied to an object, this
	 * 	grants permission to read the object data and/or metadata.
	 */
	const GRANT_READ = 'READ';

	/**
	 * Constant: GRANT_WRITE
	 * 	When applied to a bucket, grants permission to create, overwrite, and delete any object in the
	 * 	bucket. This permission is not supported for objects.
	 */
	const GRANT_WRITE = 'WRITE';

	/**
	 * Constant: GRANT_READ_ACP
	 * 	Grants permission to read the ACL for the applicable bucket or object. The owner of a bucket or
	 * 	object always has this permission implicitly.
	 */
	const GRANT_READ_ACP = 'READ_ACP';

	/**
	 * Constant: GRANT_WRITE_ACP
	 * 	Gives permission to overwrite the ACP for the applicable bucket or object. The owner of a bucket
	 * 	or object always has this permission implicitly. Granting this permission is equivalent to granting
	 * 	FULL_CONTROL because the grant recipient can make any changes to the ACP.
	 */
	const GRANT_WRITE_ACP = 'WRITE_ACP';

	/**
	 * Constant: GRANT_FULL_CONTROL
	 * 	Provides READ, WRITE, READ_ACP, and WRITE_ACP permissions. It does not convey additional rights and
	 * 	is provided only for convenience.
	 */
	const GRANT_FULL_CONTROL = 'FULL_CONTROL';

	/**
	 * Constant: USERS_AUTH
	 * 	The "AuthenticatedUsers" group for access control policies.
	 */
	const USERS_AUTH = 'http://acs.amazonaws.com/groups/global/AuthenticatedUsers';

	/**
	 * Constant: USERS_ALL
	 * 	The "AllUsers" group for access control policies.
	 */
	const USERS_ALL = 'http://acs.amazonaws.com/groups/global/AllUsers';

	/**
	 * Constant: USERS_LOGGING
	 * 	The "LogDelivery" group for access control policies.
	 */
	const USERS_LOGGING = 'http://acs.amazonaws.com/groups/s3/LogDelivery';

	/**
	 * Constant: PCRE_ALL
	 * 	PCRE: Match all items
	 */
	const PCRE_ALL = '/.*/i';

	/**
	 * Constant: STORAGE_STANDARD
	 * 	Standard storage redundancy.
	 */
	const STORAGE_STANDARD = 'STANDARD';

	/**
	 * Constant: STORAGE_REDUCED
	 * 	Reduced storage redundancy.
	 */
	const STORAGE_REDUCED = 'REDUCED_REDUNDANCY';


	/*%******************************************************************************************%*/
	// PROPERTIES

>>>>>>> f89d276c08923c32850e8d991a1f67c0cc2e13cb
	/**
	 * Property: request_url
	 * 	The request URL.
	 */
<<<<<<< HEAD
	var $request_url;
=======
	public $request_url;
>>>>>>> f89d276c08923c32850e8d991a1f67c0cc2e13cb

	/**
	 * Property: vhost
	 * 	The virtual host setting.
	 */
<<<<<<< HEAD
	var $vhost;
=======
	public $vhost;
>>>>>>> f89d276c08923c32850e8d991a1f67c0cc2e13cb

	/**
	 * Property: base_acp_xml
	 * 	The base XML elements to use for access control policy methods.
	 */
<<<<<<< HEAD
	var $base_acp_xml;
=======
	public $base_acp_xml;
>>>>>>> f89d276c08923c32850e8d991a1f67c0cc2e13cb

	/**
	 * Property: base_logging_xml
	 * 	The base XML elements to use for logging methods.
	 */
<<<<<<< HEAD
	var $base_logging_xml;
=======
	public $base_logging_xml;

	/**
	 * Property: base_notification_xml
	 * 	The base XML elements to use for notifications.
	 */
	public $base_notification_xml;

	/**
	 * Property: base_versioning_xml
	 * 	The base XML elements to use for versioning.
	 */
	public $base_versioning_xml;

	/**
	 * Property: path_style
	 * 	The DNS vs. Path-style setting.
	 */
	public $path_style = false;
>>>>>>> f89d276c08923c32850e8d991a1f67c0cc2e13cb


	/*%******************************************************************************************%*/
	// CONSTRUCTOR

	/**
	 * Method: __construct()
<<<<<<< HEAD
	 * 	The constructor
=======
	 * 	Constructs a new instance of <AmazonS3>.
>>>>>>> f89d276c08923c32850e8d991a1f67c0cc2e13cb
	 *
	 * Access:
	 * 	public
	 *
	 * Parameters:
<<<<<<< HEAD
	 * 	key - _string_ (Optional) Your Amazon API Key. If blank, it will look for the <AWS_KEY> constant.
	 * 	secret_key - _string_ (Optional) Your Amazon API Secret Key. If blank, it will look for the <AWS_SECRET_KEY> constant.
	 *
	 * Returns:
	 * 	_boolean_ false if no valid values are set, otherwise true.
=======
	 * 	$key - _string_ (Optional) Amazon API Key. If blank, the <AWS_KEY> constant is used.
	 * 	$secret_key - _string_ (Optional) Amazon API Secret Key. If blank, the <AWS_SECRET_KEY> constant is used.
	 *
	 * Returns:
	 * 	_boolean_ A value of `false` if no valid values are set, otherwise `true`.
>>>>>>> f89d276c08923c32850e8d991a1f67c0cc2e13cb
	 */
	public function __construct($key = null, $secret_key = null)
	{
		$this->vhost = null;
		$this->api_version = '2006-03-01';
<<<<<<< HEAD
		$this->hostname = S3_DEFAULT_URL;

		$this->base_acp_xml = '<?xml version="1.0" encoding="UTF-8"?><AccessControlPolicy xmlns="http://s3.amazonaws.com/doc/latest/"></AccessControlPolicy>';
		$this->base_logging_xml = '<?xml version="1.0" encoding="utf-8"?><BucketLoggingStatus xmlns="http://doc.s3.amazonaws.com/' . $this->api_version . '"></BucketLoggingStatus>';
=======
		$this->hostname = self::DEFAULT_URL;

		$this->base_acp_xml = '<?xml version="1.0" encoding="UTF-8"?><AccessControlPolicy xmlns="http://s3.amazonaws.com/doc/latest/"></AccessControlPolicy>';
		$this->base_location_constraint = '<?xml version="1.0" encoding="UTF-8"?><CreateBucketConfiguration><LocationConstraint></LocationConstraint></CreateBucketConfiguration>';
		$this->base_logging_xml = '<?xml version="1.0" encoding="utf-8"?><BucketLoggingStatus xmlns="http://doc.s3.amazonaws.com/' . $this->api_version . '"></BucketLoggingStatus>';
		$this->base_notification_xml = '<?xml version="1.0" encoding="utf-8"?><NotificationConfiguration></NotificationConfiguration>';
		$this->base_versioning_xml = '<?xml version="1.0" encoding="utf-8"?><VersioningConfiguration xmlns="http://s3.amazonaws.com/doc/2006-03-01/"></VersioningConfiguration>';
>>>>>>> f89d276c08923c32850e8d991a1f67c0cc2e13cb

		if (!$key && !defined('AWS_KEY'))
		{
			throw new S3_Exception('No account key was passed into the constructor, nor was it set in the AWS_KEY constant.');
		}

		if (!$secret_key && !defined('AWS_SECRET_KEY'))
		{
			throw new S3_Exception('No account secret was passed into the constructor, nor was it set in the AWS_SECRET_KEY constant.');
		}

		return parent::__construct($key, $secret_key);
	}


	/*%******************************************************************************************%*/
	// AUTHENTICATION

	/**
	 * Method: authenticate()
<<<<<<< HEAD
	 * 	Authenticates a connection to S3. This should not be used directly unless you're writing custom methods for this class.
	 *
	 * Access:
	 * 	public
 	 *
	 * Parameters:
	 * 	bucket - _string_ (Required) The name of the bucket to be used.
	 * 	opt - _array_ (Optional) Associative array of parameters for authenticating. See the individual methods for allowed keys.
	 * 	location - _string_ (Do Not Use) Used internally by this function on occasions when S3 returns a redirect code and it needs to call itself recursively.
	 * 	redirects - _integer_ (Do Not Use) Used internally by this function on occasions when S3 returns a redirect code and it needs to call itself recursively.
	 *
	 * Returns:
	 * 	<ResponseCore> object
 	 *
	 * See Also:
	 * 	http://docs.amazonwebservices.com/AmazonS3/latest/RESTAuthentication.html
	 */
	public function authenticate($bucket, $opt = null, $location = null, $redirects = 0)
	{
		// If nothing was passed in, don't do anything.
		if (!$opt)
		{
			return false;
		}
		else
		{
			// Set default values
			$bucket = strtolower($bucket);
			$acl = null;
			$body = null;
                        $inputFilename = null;
			$contentType = 'application/x-www-form-urlencoded';
			$delimiter = null;
			$filename = null;
			$headers = null;
			$marker = null;
			$maxKeys = null;
			$method = null;
			$prefix = null;
			$verb = null;
			$lastmodified = null;
			$etag = null;
			$qsa = null;
			$md5 = null;
			$metadataDirective = null;
			$meta = null;
			$hmeta = null;
			$range = null;
			$returnCurlHandle = null;

			// Break the array into individual variables, while storing the original.
			$_opt = $opt;
			extract($opt);

			$filename = rawurlencode($filename);

			// Set hostname
			if ($this->vhost)
			{
				$hostname = $this->vhost;
			}
			elseif ($method == 'list_buckets')
			{
				$hostname = $this->hostname;
			}
			else
			{
				$hostname = $bucket . '.' . $this->hostname;
			}

			// Get the UTC timestamp in RFC 2616 format
			$since_epoch = time() + $this->adjust_offset;
			$httpDate = gmdate(DATE_FORMAT_RFC2616, $since_epoch);

			// Generate the request string
			$request = '';

			// Append additional parameters
			$request .= '/' . $filename;

			// List Object settings
			if ($method == 'list_objects')
			{
				$request = '';

				if (isset($prefix) && !empty($prefix))
				{
					$request .= '&prefix=' . $prefix;
				}

				if (isset($marker) && !empty($marker))
				{
					$request .= '&marker=' . $marker;
				}

				if (isset($maxKeys) && !empty($maxKeys))
				{
					$request .= '&max-keys=' . $maxKeys;
				}

				if (isset($delimiter) && !empty($delimiter))
				{
					$request .= '&delimiter=' . $delimiter;
				}

				$request = '/?' . ltrim($request, '&');
			}

			// Logging
			elseif ($method == 'get_logs' || $method == 'enable_logging' || $method == 'disable_logging')
			{
				$request .= '?logging';
				$filename .= '?logging';
			}

			// Get Bucket Locale settings
			elseif ($method == 'get_bucket_locale')
			{
				$request = '/?location';
				$filename = '?location';
			}

			// Add ACL stuff if we're getting/setting ACL preferences.
			elseif ($method == 'get_bucket_acl' || $method == 'get_object_acl' || $method == 'set_bucket_acl' || $method == 'set_object_acl')
			{
				$request .= '?acl';
				$filename .= '?acl';
			}

			elseif ($method == 'get_object_url')
			{
				$filename = rawurldecode($filename);
			}

			if (!$request == '/')
			{
				$request = '/' . $request;
			}

			// Prepare the request.
			if ($location)
			{
				$this->request_url = $location;
			}
			else
			{
				$scheme = ($this->enable_ssl) ? 'https://' : 'http://';
				$this->request_url = $scheme . $hostname . $request;
			}

			// Instantiate the request class
			$req = new $this->request_class($this->request_url, $this->set_proxy);

			// Do we have a verb?
			if (isset($verb) && !empty($verb))
			{
				$req->set_method($verb);
			}

			// Do we have a contentType?
			if (isset($contentType) && !empty($contentType))
			{
				$req->add_header('Content-Type', $contentType);
			}

			// Do we have a date?
			if (isset($httpDate) && !empty($httpDate))
			{
				$req->add_header("Date", $httpDate);
			}

			// Do we have ACL settings? (Optional in signed string)
			if (isset($acl) && !empty($acl))
			{
				$req->add_header("x-amz-acl", $acl);
				$acl = 'x-amz-acl:' . $acl . "\n";
			}

			// Do we have COPY settings?
			if ($method == 'copy_object' || $method == 'update_object')
			{
				// Copy data
				$acl .= 'x-amz-copy-source:/' . $sourceBucket . '/' . $sourceObject . "\n";
				$req->add_header('x-amz-copy-source', '/' . $sourceBucket . '/' . $sourceObject);

				// Add any standard HTTP headers.
				if ($headers)
				{
					uksort($headers, 'strnatcasecmp');

					foreach ($headers as $k => $v)
					{
						$req->add_header($k, $v);
					}
				}

				// Add any meta headers.
				if ($meta)
				{
					uksort($meta, 'strnatcasecmp');

					foreach ($meta as $k => $v)
					{
						// Strip line breaks.
						$v = str_replace(array("\r", "\n", '%0A'), '', $v);

						$req->add_header('x-amz-meta-' . strtolower($k), $v);
						$acl .= 'x-amz-meta-' . strtolower($k) . ':' . $v . "\n";
					}
				}

				// Metadata directive
				$acl .= 'x-amz-metadata-directive:' . $metadataDirective . "\n";
				$req->add_header('x-amz-metadata-directive', $metadataDirective);
			}

			// Set DevPay tokens if we have them.
			if ($this->devpay_tokens)
			{
				$request->add_header('x-amz-security-token', $this->devpay_tokens);
			}

			// Are we checking for changes?
			if ($lastmodified && $etag)
			{
				$req->add_header('If-Modified-Since', $lastmodified);
				$req->add_header('If-None-Match', $etag);
			}

			// Partial content range
			if ($range)
			{
				$req->add_header('Range', 'bytes=' . $range);
			}

			// Add a body if we're creating or setting
			if ($method == 'create_object' || $method == 'create_bucket' ||
				$method == 'enable_logging' || $method == 'disable_logging' ||
				$method == 'set_object_acl' || $method == 'set_bucket_acl')
			{
				if (isset($body) && !empty($body))
				{
					$req->set_body($body);
					$md5 = $this->util->hex_to_base64(md5($body));
					$req->add_header('Content-MD5', $md5);
				}
				elseif (isset($inputFilename) && !empty($inputFilename) && $method === 'create_object')
				{
					$fileResourcePointer = fopen($inputFilename, 'r');
					$req->set_curlopts(array(
						CURLOPT_PUT => true,
						CURLOPT_INFILE => $fileResourcePointer,
						CURLOPT_INFILESIZE => filesize($inputFilename) // on 32-bit systems filesize cannot be greater than 2GB
					));
				}

				// Add any standard HTTP headers.
				if ($headers)
				{
					uksort($headers, 'strnatcasecmp');

					foreach ($headers as $k => $v)
					{
						$req->add_header($k, $v);
					}
				}

				// Add any meta headers.
				if ($meta)
				{
					uksort($meta, 'strnatcasecmp');

					foreach ($meta as $k => $v)
					{
						// Strip line breaks.
						$v = str_replace(array("\r", "\n", '%0A'), '', $v);

						$req->add_header('x-amz-meta-' . strtolower($k), $v);
						$hmeta .= 'x-amz-meta-' . strtolower($k) . ':' . $v . "\n";
					}
				}
			}

			// Data that will be "signed".
			$filename = '/' . $filename;

			// If we're listing buckets, there is no filename value.
			if ($method == 'list_buckets')
			{
				$filename = '';
			}

			if ($qsa)
			{
				// Prepare the string to sign
				$stringToSign = "$verb\n\n\n$since_epoch\n$acl$hmeta/$bucket$filename";
			}
			else
			{
				// Prepare the string to sign
				$stringToSign = "$verb\n$md5\n$contentType\n$httpDate\n$acl$hmeta/$bucket$filename";
			}

			// Hash the AWS secret key and generate a signature for the request.
			$signature = $this->util->hex_to_base64(hash_hmac('sha1', $stringToSign, $this->secret_key));

			// Are we getting a Query String Auth?
			if ($qsa)
			{
				return array(
					'bucket' => $bucket,
					'filename' => $filename,
					'key' => $this->key,
					'expires' => $since_epoch,
					'signature' => $signature,
				);
			}

			// Pass the developer key and signature
			$req->add_header("Authorization", "AWS " . $this->key . ":" . $signature);

			// If we have a "true" value for returnCurlHandle, do that instead of completing the request.
			if ($returnCurlHandle)
			{
				return $req->prep_request();
			}

			// Send!
			$req->send_request();

			// Close file resource pointer if we were reading file
			if (isset($fileResourcePointer))
			{
				fclose($fileResourcePointer);
			}

			// Prepare the response.
			$headers = $req->get_response_header();
			$headers['x-cloudfusion-redirects'] = $redirects;
			$headers['x-cloudfusion-requesturl'] = $this->request_url;
			$headers['x-cloudfusion-stringtosign'] = $stringToSign;
			$headers['x-cloudfusion-requestheaders'] = $req->request_headers;

			if (strpos($req->get_response_body(), '<?xml') !== false)
			{
				$data = new $this->response_class($headers, new SimpleXMLElement($req->get_response_body()), $req->get_response_code());
			}
			else
			{
				$data = new $this->response_class($headers, $req->get_response_body(), $req->get_response_code());
			}

			// Did Amazon tell us to redirect? Typically happens for multiple rapid requests EU datacenters.
			// @see http://docs.amazonwebservices.com/AmazonS3/latest/Redirects.html
			if ((int) $req->get_response_code() == 307) // Temporary redirect to new endpoint.
			{
				$redirects++;
				$data = $this->authenticate($bucket,
					$_opt,
					$headers['location'],
					$redirects);
			}

			// Return!
			return $data;
		}
	}

	/**
	 * Method: set_vhost()
	 * 	Use this virtual host instead of the normal bucket.s3.amazonaws.com domain.
=======
	 * 	Authenticates a connection to Amazon S3. Do not use directly unless implementing custom methods for
	 * 	this class.
	 *
	 * Access:
	 * 	public
	 *
	 * Parameters:
	 * 	$bucket - _string_ (Required) The name of the bucket to use.
	 * 	$opt - _array_ (Optional) An associative array of parameters for authenticating. See the individual methods for allowed keys.
	 * 	$location - _string_ (Do Not Use) Used internally by this function on occasions when Amazon S3 returns a redirect code and it needs to call itself recursively.
	 * 	$redirects - _integer_ (Do Not Use) Used internally by this function on occasions when Amazon S3 returns a redirect code and it needs to call itself recursively.
	 *
	 * Returns:
	 * 	_CFResponse_ A <CFResponse> object containing a parsed HTTP response.
	 *
	 * See Also:
	 * 	[REST authentication](http://docs.amazonwebservices.com/AmazonS3/latest/RESTAuthentication.html)
	 */
	public function authenticate($bucket, $opt = null, $location = null, $redirects = 0)
	{
		/**
		 * resource
		 * sub_resource
		 * query_string
		 * headers
		 * body
		 * verb
		 * qsa
		 * curlopts
		 * versionId
		 * fileUpload
		 * fileDownload
		 */

		/**
		 * @todo: Handle duplicate headers with different values.
		 */

		// Validate the S3 bucket name
		if (!$this->validate_bucketname_support($bucket))
		{
			throw new S3_Exception('S3 does not support "' . $bucket . '" as a valid bucket name. Review "Bucket Restrictions and Limitations" in the S3 Developer Guide for more information.');
		}

		// Die if $opt isn't set.
		if (!$opt) return false;

		$method_arguments = func_get_args();

		// Use the caching flow to determine if we need to do a round-trip to the server.
		if ($this->use_cache_flow)
		{
			// Generate an identifier specific to this particular set of arguments.
			$cache_id = $this->key . '_' . get_class($this) . '_' . $bucket . '_' . sha1(serialize($method_arguments));

			// Instantiate the appropriate caching object.
			$this->cache_object = new $this->cache_class($cache_id, $this->cache_location, $this->cache_expires, $this->cache_compress);

			if ($this->delete_cache)
			{
				$this->use_cache_flow = false;
				$this->delete_cache = false;
				return $this->cache_object->delete();
			}

			// Invoke the cache callback function to determine whether to pull data from the cache or make a fresh request.
			$data = $this->cache_object->response_manager(array($this, 'cache_callback'), $method_arguments);

			// Parse the XML body
			$data = $this->parse_callback($data);

			// End!
			return $data;
		}

		// If we haven't already set a resource prefix...
		if (!$this->resource_prefix || $this->path_style)
		{
			// And if the bucket name isn't DNS-valid...
			if (!$this->validate_bucketname_create($bucket) || $this->path_style)
			{
				// Fall back to the older path-style URI
				$this->set_resource_prefix('/' . $bucket);
			}
		}

		// Determine hostname
		$scheme = $this->use_ssl ? 'https://' : 'http://';
		if ($this->resource_prefix || $this->path_style) // Use bucket-in-path method.
		{
			$hostname = $this->hostname . $this->resource_prefix . (($bucket === '' || $this->resource_prefix === '/' . $bucket) ? '' : ('/' . $bucket));
		}
		else
		{
			$hostname = $this->vhost ? $this->vhost : (($bucket === '') ? $this->hostname : ($bucket . '.') . $this->hostname);
		}

		// Get the UTC timestamp in RFC 2616 format
		$date = gmdate($this->util->konst($this->util, 'DATE_FORMAT_RFC2616'), (time() + (integer) $this->adjust_offset));

		// Storage for request parameters.
		$resource = '';
		$sub_resource = '';
		$query_string_params = array();
		$signable_query_string_params = array();
		$string_to_sign = '';
		$headers = array(
			'Content-MD5' => '',
			'Content-Type' => 'application/x-www-form-urlencoded',
			'Date' => $date
		);

		/*%******************************************************************************************%*/

		// Handle specific resources
		if (isset($opt['resource']))
		{
			$resource .= $opt['resource'];
		}

		// Merge query string values
		if (isset($opt['query_string']))
		{
			$query_string_params = array_merge($query_string_params, $opt['query_string']);
		}
		$query_string = $this->util->to_query_string($query_string_params);

		// Merge the signable query string values
		if (isset($opt['versionId']))
		{
			$signable_query_string_params['versionId'] = rawurlencode($opt['versionId']);
		}
		$signable_query_string = $this->util->to_query_string($signable_query_string_params);

		// Merge the HTTP headers
		if (isset($opt['headers']))
		{
			$headers = array_merge($headers, $opt['headers']);
		}

		// Compile the URI to request
		$conjunction = '?';
		$signable_resource = '/' . rawurlencode($resource);
		$non_signable_resource = '';

		if (isset($opt['sub_resource']))
		{
			$signable_resource .= $conjunction . rawurlencode($opt['sub_resource']);
			$conjunction = '&';
		}
		if ($signable_query_string !== '')
		{
			$signable_resource .= $conjunction . $signable_query_string;
		}
		if ($query_string !== '')
		{
			$non_signable_resource .= $conjunction . $query_string;
		}
		$this->request_url = $scheme . $hostname . $signable_resource . $non_signable_resource;

		// Instantiate the request class
		$request = new $this->request_class($this->request_url, $this->proxy);

		// Update RequestCore settings
		$request->request_class = $this->request_class;
		$request->response_class = $this->response_class;

		// Streaming uploads
		if (isset($opt['fileUpload']))
		{
			$request->set_read_file($opt['fileUpload']);

			// Attempt to guess the correct mime-type
			if ($headers['Content-Type'] === 'application/x-www-form-urlencoded')
			{
				$extension = explode('.', $opt['fileUpload']);
				$extension = array_pop($extension);
				$mime_type = CFMimeTypes::get_mimetype($extension);
				$headers['Content-Type'] = $mime_type;
			}
		}

		// Streaming downloads
		if (isset($opt['fileDownload']))
		{
			$request->set_write_file($opt['fileDownload']);
		}

		// Set custom CURLOPT settings
		if (isset($opt['curlopts']))
		{
			$request->set_curlopts($opt['curlopts']);
			unset($opt['curlopts']);
		}

		// Do we have a verb?
		if (isset($opt['verb']))
		{
			$request->set_method($opt['verb']);
			$string_to_sign .= $opt['verb'] . "\n";
		}

		// Add headers and content when we have a body
		if (isset($opt['body']))
		{
			$request->set_body($opt['body']);
			$headers['Content-Length'] = strlen($opt['body']);
			$headers['Content-MD5'] = $this->util->hex_to_base64(md5($opt['body']));
		}

		// Handle query-string authentication
		if (isset($opt['preauth']) && (integer) $opt['preauth'] > 0)
		{
			unset($headers['Date']);
			$headers['Content-Type'] = '';
			$headers['Expires'] = strtotime($opt['preauth']);
		}

		// Sort headers
		uksort($headers, 'strnatcasecmp');

		// Add headers to request and compute the string to sign
		foreach ($headers as $header_key => $header_value)
		{
			// Strip linebreaks from header values as they're illegal and can allow for security issues
			$header_value = str_replace(array("\r", "\n"), '', $header_value);

			// Add the header if it has a value
			if ($header_value !== '')
			{
				$request->add_header($header_key, $header_value);
			}

			// Generate the string to sign
			if (
				strtolower($header_key) === 'content-md5' ||
				strtolower($header_key) === 'content-type' ||
				strtolower($header_key) === 'date' ||
				(strtolower($header_key) === 'expires' && isset($opt['preauth']) && (integer) $opt['preauth'] > 0)
			)
			{
				$string_to_sign .= $header_value . "\n";
			}
			elseif (substr(strtolower($header_key), 0, 6) === 'x-amz-')
			{
				$string_to_sign .= strtolower($header_key) . ':' . $header_value . "\n";
			}
		}

		// Add the signable resource location
		$string_to_sign .= ($this->resource_prefix ? $this->resource_prefix : '');
		$string_to_sign .= (($bucket === '' || $this->resource_prefix === '/' . $bucket) ? '' : ('/' . $bucket)) . $signable_resource;

		// Hash the AWS secret key and generate a signature for the request.
		$signature = base64_encode(hash_hmac('sha1', $string_to_sign, $this->secret_key, true));
		$request->add_header('Authorization', 'AWS ' . $this->key . ':' . $signature);

		// If we're generating a URL, return certain data to the calling method.
		if (isset($opt['preauth']) && (integer) $opt['preauth'] > 0)
		{
			return $this->request_url . (isset($opt['sub_resource']) ? '&' : '?') . 'AWSAccessKeyId=' . $this->key . '&Expires=' . $headers['Expires'] . '&Signature=' . rawurlencode($signature);
		}
		elseif (isset($opt['preauth']))
		{
			return $this->request_url;
		}

		/*%******************************************************************************************%*/

		// Manage the (newer) batch request API or the (older) returnCurlHandle setting.
		if ($this->use_batch_flow)
		{
			$handle = $request->prep_request();
			$this->batch_object->add($handle);
			$this->use_batch_flow = false;

			return $handle;
		}
		elseif (isset($opt['returnCurlHandle']) && $opt['returnCurlHandle'] === true)
		{
			return $request->prep_request();
		}

		// Send!
		$request->send_request();

		// Prepare the response
		$headers = $request->get_response_header();
		$headers['x-aws-request-url'] = $this->request_url;
		$headers['x-aws-redirects'] = $redirects;
		$headers['x-aws-stringtosign'] = $string_to_sign;
		$headers['x-aws-requestheaders'] = $request->request_headers;

		// Did we have a request body?
		if (isset($opt['body']))
		{
			$headers['x-aws-requestbody'] = $opt['body'];
		}

		$data = new $this->response_class($headers, $this->parse_callback($request->get_response_body()), $request->get_response_code());

		// Did Amazon tell us to redirect? Typically happens for multiple rapid requests EU datacenters.
		// @see: http://docs.amazonwebservices.com/AmazonS3/latest/Redirects.html
		if ((int) $request->get_response_code() === 307) // Temporary redirect to new endpoint.
		{
			$redirects++;
			$data = $this->authenticate($bucket,
				$opt,
				$headers['location'],
				$redirects);
		}

		// Return!
		return $data;
	}

	/**
	 * Method: validate_bucketname_create()
	 * 	Validates whether or not the specified Amazon S3 bucket name is valid for DNS-style access. This
	 * 	method is leveraged by any method that creates buckets.
>>>>>>> f89d276c08923c32850e8d991a1f67c0cc2e13cb
	 *
	 * Access:
	 * 	public
 	 *
	 * Parameters:
<<<<<<< HEAD
	 * 	vhost - _string_ (Required) The hostname to use instead of bucket.s3.amazonaws.com.
	 *
	 * Returns:
	 * 	void
 	 *
	 * See Also:
	 * 	Virtual Hosting of Buckets - http://docs.amazonwebservices.com/AmazonS3/latest/VirtualHosting.html
	 */
	public function set_vhost($vhost)
	{
		$this->vhost = $vhost;
	}


	/*%******************************************************************************************%*/
	// BUCKET METHODS

	/**
	 * Method: create_bucket()
	 * 	The bucket holds all of your objects, and provides a globally unique namespace in which you can manage the keys that identify objects. A bucket can hold any number of objects.
=======
	 * 	$bucket - _string_ (Required) The name of the bucket to validate.
	 *
	 * Returns:
	 * 	_boolean_ Whether or not the specified Amazon S3 bucket name is valid for DNS-style access. A value of `true` means that the bucket name is valid. A valuf of `false` means that the bucket name is invalid.
	 */
	public function validate_bucketname_create($bucket)
	{
		// list_buckets() uses this. Let it pass.
		if ($bucket === '') return true;

		if (
			($bucket === null || $bucket === false) ||                  // Must not be null or false
			preg_match('/[^(a-z0-9\-\.)]/', $bucket) ||                 // Must be in the lowercase Roman alphabet, period or hyphen
			!preg_match('/^([a-z]|\d)/', $bucket) ||                    // Must start with a number or letter
			!(strlen($bucket) >= 3 && strlen($bucket) <= 63) ||         // Must be between 3 and 63 characters long
			(strpos($bucket, '..') !== false) ||                        // Bucket names cannot contain two, adjacent periods
			(strpos($bucket, '-.') !== false) ||                        // Bucket names cannot contain dashes next to periods
			(strpos($bucket, '.-') !== false) ||                        // Bucket names cannot contain dashes next to periods
			preg_match('/(-|\.)$/', $bucket) ||                         // Bucket names should not end with a dash or period
			preg_match('/^(?:[0-9]{1,3}\.){3}[0-9]{1,3}$/', $bucket)    // Must not be formatted as an IP address
		) return false;

		return true;
	}

	/**
	 * Method: validate_bucketname_support()
	 * 	Validates whether or not the specified Amazon S3 bucket name is valid for path-style access. This
	 * 	method is leveraged by any method that reads from buckets.
>>>>>>> f89d276c08923c32850e8d991a1f67c0cc2e13cb
	 *
	 * Access:
	 * 	public
 	 *
	 * Parameters:
<<<<<<< HEAD
	 * 	bucket - _string_ (Required) The name of the bucket to be used.
	 * 	locale - _string_ (Optional) Sets the preferred geographical location for the bucket. Accepts S3_LOCATION_US or S3_LOCATION_EU. Defaults to S3_LOCATION_US.
	 * 	returnCurlHandle - _boolean_ (Optional) A private toggle that will return the CURL handle for the request rather than actually completing the request. This is useful for MultiCURL requests.
	 *
	 * Returns:
	 * 	<ResponseCore> object
 	 *
	 * See Also:
	 * 	AWS Method - http://docs.amazonwebservices.com/AmazonS3/latest/RESTBucketPUT.html
	 * 	Using Buckets - http://docs.amazonwebservices.com/AmazonS3/latest/UsingBucket.html
	 * 	Related - <get_bucket()>, <head_bucket()>, <delete_bucket()>
	 */
	public function create_bucket($bucket, $locale = null, $returnCurlHandle = null)
	{
		// Defaults
		$body = null;
		$contentType = null;

		if ($locale)
		{
			switch(strtolower($locale))
			{
				case 'eu':
					$body = '<CreateBucketConfiguration><LocationConstraint>' . strtoupper($locale) . '</LocationConstraint></CreateBucketConfiguration>';
					$contentType = 'application/xml';
					break;

				default:
					$body = '';
					$contentType = 'application/xml';
					break;
			}
		}
		else
		{
			$body = '';
			$contentType = 'application/xml';
		}

		// Authenticate to S3
		return $this->authenticate($bucket, array(
			'verb' => HTTP_PUT,
			'method' => 'create_bucket',
			'body' => $body,
			'contentType' => $contentType,
			'returnCurlHandle' => $returnCurlHandle
		));
	}

	/**
	 * Method: get_bucket()
	 * 	Referred to as "GET Bucket" in the AWS docs, but implemented here as AmazonS3::list_objects(). Therefore, this is an alias of list_objects().
	 *
	 * See Also:
 	 * 	Related - <create_bucket()>, <head_bucket()>, <delete_bucket()>, <list_objects()>
	 */
	public function get_bucket($bucket, $opt = null)
	{
		if (!$opt) $opt = array();

		return $this->list_objects($bucket, $opt);
	}

	/**
	 * Method: get_bucket_locale()
	 * 	Lists the location constraint of the bucket. U.S.-based buckets have no response.
=======
	 * 	$bucket - _string_ (Required) The name of the bucket to validate.
	 *
	 * Returns:
	 * 	_boolean_ Whether or not the bucket name is valid. A value of `true` means that the bucket name is valid. A valuf of `false` means that the bucket name is invalid.
	 */
	public function validate_bucketname_support($bucket)
	{
		// list_buckets() uses this. Let it pass.
		if ($bucket === '') return true;

		// Validate
		if (
			($bucket === null || $bucket === false) ||                  // Must not be null or false
			preg_match('/[^(a-z0-9_\-\.)]/i', $bucket) ||               // Must be in the Roman alphabet, period, hyphen or underscore
			!preg_match('/^([a-z]|\d)/i', $bucket) ||                   // Must start with a number or letter
			!(strlen($bucket) >= 3 && strlen($bucket) <= 255) ||        // Must be between 3 and 255 characters long
			preg_match('/^(?:[0-9]{1,3}\.){3}[0-9]{1,3}$/', $bucket)    // Must not be formatted as an IP address
		) return false;

		return true;
	}

	/**
	 * Method: cache_callback()
	 * 	The callback function that is executed when the cache doesn't exist or has expired. The response of
	 * 	this method is cached. Accepts identical parameters as the <authenticate()> method. Never call this
	 * 	method directly -- it is used internally by the caching system.
>>>>>>> f89d276c08923c32850e8d991a1f67c0cc2e13cb
	 *
	 * Access:
	 * 	public
 	 *
	 * Parameters:
<<<<<<< HEAD
	 * 	bucket - _string_ (Required) The name of the bucket to be used.
	 * 	returnCurlHandle - _boolean_ (Optional) A private toggle that will return the CURL handle for the request rather than actually completing the request. This is useful for MultiCURL requests.
	 *
	 * Returns:
	 * 	<ResponseCore> object
 	 *
	 * See Also:
	 * 	AWS Method - http://docs.amazonwebservices.com/AmazonS3/latest/RESTBucketLocationGET.html
	 */
	public function get_bucket_locale($bucket, $returnCurlHandle = null)
	{
		// Add this to our request
		$opt = array();
		$opt['verb'] = HTTP_GET;
		$opt['method'] = 'get_bucket_locale';
		$opt['returnCurlHandle'] = $returnCurlHandle;

		// Authenticate to S3
		return $this->authenticate($bucket, $opt);
	}

	/**
	 * Method: head_bucket()
	 * 	Reads only the HTTP headers of a bucket.
	 *
	 * Access:
	 * 	public
 	 *
	 * Parameters:
	 * 	bucket - _string_ (Required) The name of the bucket to be used.
	 * 	returnCurlHandle - _boolean_ (Optional) A private toggle that will return the CURL handle for the request rather than actually completing the request. This is useful for MultiCURL requests.
	 *
	 * Returns:
	 * 	<ResponseCore> object
 	 *
	 * See Also:
	 * 	AWS Method - http://docs.amazonwebservices.com/AmazonS3/latest/RESTObjectHEAD.html
	 * 	Related - <create_bucket()>, <get_bucket()>, <delete_bucket()>
	 */
	public function head_bucket($bucket, $returnCurlHandle = null)
	{
		// Add this to our request
		$opt = array();
		$opt['verb'] = HTTP_HEAD;
		$opt['method'] = 'head_bucket';
		$opt['returnCurlHandle'] = $returnCurlHandle;

		// Authenticate to S3
		return $this->authenticate($bucket, $opt);
	}

	/**
	 * Method: if_bucket_exists()
	 * 	Checks whether this bucket already exists in your account or not.
=======
	 * 	$bucket - _string_ (Required) The name of the bucket to use.
	 * 	$opt - _array_ (Optional) An associative array of parameters for authenticating. See the individual methods for allowed keys.
	 * 	$location - _string_ (Optional) Used internally by this method when Amazon S3 returns a redirect code and needs to call itself recursively.
	 * 	$redirects - _integer_ (Optional) Used internally by this method when Amazon S3 returns a redirect code and needs to call itself recursively.
	 *
	 * Returns:
	 * 	_CFResponse_ A <CFResponse> object containing a parsed HTTP response.
	 */
	public function cache_callback($bucket, $opt = null, $location = null, $redirects = 0)
	{
		// Disable the cache flow since it's already been handled.
		$this->use_cache_flow = false;

		// Make the request
		$response = $this->authenticate($bucket, $opt, $location, $redirects);

		if (isset($response->body) && ($response->body instanceof SimpleXMLElement))
		{
			$response->body = $response->body->asXML();
		}

		return $response;
	}


	/*%******************************************************************************************%*/
	// SETTERS

	/**
	 * Method: set_region()
	 * 	Sets the region to use for subsequent Amazon S3 operations.
	 *
	 * Access:
	 * 	public
	 *
	 * Parameters:
	 * 	$region - _string_ (Required) The region to use for subsequent Amazon S3 operations. Accepts the following constants: <REGION_US_E1>, <REGION_US_W1>, <REGION_EU_W1> or <REGION_APAC_SE1>.
	 *
	 * Returns:
	 * 	`$this` A reference to the current instance.
	 */
	public function set_region($region)
	{
		switch ($region)
		{
			case self::REGION_US_W1: // Northern California
			case self::REGION_APAC_SE1: // Singapore
				$this->set_hostname('s3-' . $region . '.amazonaws.com');
				break;

			case self::REGION_EU_W1: // Ireland
				$this->set_hostname('s3-eu-west-1.amazonaws.com');
				break;

			default:
				// REGION_US_E1 // Northern Virginia
				$this->set_hostname(self::DEFAULT_URL);
				break;
		}

		return $this;
	}

	/**
	 * Method: set_vhost()
	 * 	Sets the virtual host to use in place of the default `bucket.s3.amazonaws.com` domain.
>>>>>>> f89d276c08923c32850e8d991a1f67c0cc2e13cb
	 *
	 * Access:
	 * 	public
	 *
	 * Parameters:
<<<<<<< HEAD
	 * 	bucket - _string_ (Required) The name of the bucket to be used.
	 *
	 * Returns:
	 * 	_boolean_ Whether the bucket exists or not.
	 */
	public function if_bucket_exists($bucket)
	{
		$header = $this->head_bucket($bucket);
		return $header->isOK();
	}

	/**
	 * Method: delete_bucket()
	 * 	Deletes a bucket from your account. All objects in the bucket must be deleted before the bucket itself can be deleted.
	 *
	 * Access:
	 * 	public
 	 *
	 * Parameters:
	 * 	bucket - _string_ (Required) The name of the bucket to be used.
	 * 	force - _boolean_ (Optional) Whether to force-delete the bucket and all of its contents. Defaults to false.
	 * 	returnCurlHandle - _boolean_ (Optional) A private toggle that will return the CURL handle for the request rather than actually completing the request. This is useful for MultiCURL requests.
	 *
	 * Returns:
	 * 	<ResponseCore> object if normal bucket deletion or if forced bucket deletion was successful, a boolean false if the forced deletion was unsuccessful.
 	 *
	 * See Also:
	 * 	AWS Method - http://docs.amazonwebservices.com/AmazonS3/latest/RESTBucketDELETE.html
	 * 	Related - <create_bucket()>, <get_bucket()>, <head_bucket()>
	 */
	public function delete_bucket($bucket, $force = false, $returnCurlHandle = null)
	{
		// Set default value
		$success = true;

		if ($force)
		{
			// Delete all of the items from the bucket.
			$success = $this->delete_all_objects($bucket);
		}

		// As long as we were successful...
		if ($success)
		{
			// Add this to our request
			$opt = array();
			$opt['verb'] = HTTP_DELETE;
			$opt['method'] = 'delete_bucket';
			$opt['returnCurlHandle'] = $returnCurlHandle;

			// Authenticate to S3
			return $this->authenticate($bucket, $opt);
		}

		return false;
	}

	/**
	 * Method: copy_bucket()
	 * 	Copies the contents of a bucket into a new bucket.
	 *
	 * Access:
	 * 	public
 	 *
	 * Parameters:
	 * 	source_bucket - _string_ (Required) The name of the source bucket.
	 * 	dest_bucket - _string_ (Required) The name of the destination bucket.
	 * 	acl - _string_ (Optional) One of the following options: <S3_ACL_PRIVATE>, <S3_ACL_PUBLIC>, <S3_ACL_OPEN>, or <S3_ACL_AUTH_READ>. Defaults to <S3_ACL_PRIVATE>.
	 *
	 * Returns:
	 * 	<ResponseCore> object
 	 *
	 * See Also:
	 * 	Related - <copy_object()>, <rename_bucket()>, <list_buckets()>
	 */
	public function copy_bucket($source_bucket, $dest_bucket, $acl = S3_ACL_PRIVATE)
	{
		// Since S3 can't yet copy across geographical locations, make sure that the new bucket matches the existing bucket.
		$locale = $this->get_bucket_locale($source_bucket);
		switch ($locale->body)
		{
			case S3_LOCATION_EU:
				$locale = S3_LOCATION_EU;
				break;

			default:
				$locale = S3_LOCATION_US;
				break;
		}

		$dest = $this->create_bucket($dest_bucket, $locale);

		if ($dest->isOK())
		{
			$list = $this->get_object_list($source_bucket);
			$handles = array();

			foreach ($list as $item)
			{
				$handles[] = $this->copy_object($source_bucket, $item, $dest_bucket, $item, array(
					'acl' => $acl,
					'returnCurlHandle' => true
				));
			}

			$request = new $this->request_class(null);
			return $request->send_multi_request($handles);
		}

		return false;
	}

	/**
	 * Method: rename_bucket()
	 * 	Renames a bucket by making a copy and deleting the original.
	 *
	 * Access:
	 * 	public
 	 *
	 * Parameters:
	 * 	source_bucket - _string_ (Required) The name of the source bucket.
	 * 	dest_bucket - _string_ (Required) The name of the destination bucket.
	 *
	 * Returns:
	 * 	<ResponseCore> object
 	 *
	 * See Also:
	 * 	Related - <rename_object()>, <copy_bucket()>, <list_buckets()>
	 */
	public function rename_bucket($source_bucket, $dest_bucket)
	{
		$responses['copy'] = $this->copy_bucket($source_bucket, $dest_bucket);
		$responses['delete'] = $this->delete_bucket($source_bucket, true);

		return $responses;
	}

	/**
	 * Method: get_bucket_size()
	 * 	Gets the number of files in the bucket.
	 *
	 * Access:
	 * 	public
 	 *
	 * Parameters:
	 * 	bucket - _string_ (Required) The name of the bucket to be used.
	 *
	 * Returns:
	 * 	_integer_ The number of files in the bucket.
 	 *
	 * See Also:
	 * 	Related - <get_bucket_filesize()>
	 */
	public function get_bucket_size($bucket)
	{
		return count($this->get_object_list($bucket));
	}

	/**
	 * Method: get_bucket_filesize()
	 * 	Gets the file size of the contents of the bucket.
	 *
	 * Access:
	 * 	public
 	 *
	 * Parameters:
	 * 	bucket - _string_ (Required) The name of the bucket to be used.
	 * 	friendly_format - _boolean_ (Optional) Whether to format the value to 2 decimal points using the largest possible unit (i.e. 3.42 GB).
	 *
	 * Returns:
	 * 	_integer_|_string_ The number of bytes as an integer, or the friendly format as a string.
 	 *
	 * See Also:
	 * 	Related - <get_bucket_size()>, <get_object_filesize()>
	 */
	public function get_bucket_filesize($bucket, $friendly_format = false)
	{
		$filesize = 0;
		$list = $this->list_objects($bucket);

		foreach ($list->body->Contents as $filename)
		{
			$filesize += (int) $filename->Size;
		}

		if ($friendly_format)
		{
			$filesize = $this->util->size_readable($filesize);
		}

		return $filesize;
=======
	 * 	$vhost - _string_ (Required) The virtual host to use in place of the default `bucket.s3.amazonaws.com` domain.
	 *
	 * Returns:
	 * 	`$this` A reference to the current instance.
	 *
	 * See Also:
	 * 	[Virtual Hosting of Buckets](http://docs.amazonwebservices.com/AmazonS3/latest/VirtualHosting.html)
	 */
	public function set_vhost($vhost)
	{
		$this->vhost = $vhost;
		return $this;
	}


	/*%******************************************************************************************%*/
	// BUCKET METHODS

	/**
	 * Method: create_bucket()
	 * 	Creates an Amazon S3 bucket.
	 *
	 * 	Every object stored in Amazon S3 is contained in a bucket. Buckets partition the namespace of
	 * 	objects stored in Amazon S3 at the top level. in a bucket, any name can be used for objects.
	 * 	However, bucket names must be unique across all of Amazon S3.
	 *
	 * Access:
	 * 	public
	 *
	 * Parameters:
	 * 	$bucket - _string_ (Required) The name of the bucket to create.
	 * 	$region - _string_ (Required) The preferred geographical location for the bucket. Accepts the following constants: <REGION_US_E1>, <REGION_US_W1>, <REGION_EU_W1> or <REGION_APAC_SE1>.
	 * 	$acl - _string_ (Optional) The ACL settings for the specified bucket. Accepts the following constants: <ACL_PRIVATE>, <ACL_PUBLIC>, <ACL_OPEN>, <ACL_AUTH_READ>, <ACL_OWNER_READ> or <ACL_OWNER_FULL_CONTROL>. The default value is <ACL_PRIVATE>.
	 * 	$opt - _array_ (Optional) An associative array of parameters that can have the keys listed in the following section.
	 *
	 * Keys for the $opt parameter:
	 * 	returnCurlHandle - _boolean_ (Optional) A private toggle specifying that the cURL handle be returned rather than actually completing the request. This toggle is useful for manually managed batch requests.
	 *
	 * Returns:
	 * 	_CFResponse_ A <CFResponse> object containing a parsed HTTP response.
	 *
	 * See Also:
	 * 	* [Working with Amazon S3 Buckets](http://docs.amazonwebservices.com/AmazonS3/latest/UsingBucket.html)
	 */
	public function create_bucket($bucket, $region, $acl = self::ACL_PRIVATE, $opt = null)
	{
		// If the bucket contains uppercase letters...
		if (preg_match('/[A-Z]/', $bucket))
		{
			// Throw a warning
			trigger_error('Since DNS-valid bucket names cannot contain uppercase characters, "' . $bucket . '" has been automatically converted to "' . strtolower($bucket) . '"', E_USER_WARNING);

			// Force the bucketname to lowercase
			$bucket = strtolower($bucket);
		}

		// Validate the S3 bucket name for creation
		if (!$this->validate_bucketname_create($bucket))
		{
			throw new S3_Exception('"' . $bucket . '" is not DNS-valid (i.e., <bucketname>.s3.amazonaws.com), and cannot be used as an S3 bucket name. Review "Bucket Restrictions and Limitations" in the S3 Developer Guide for more information.');
		}

		if (!$opt) $opt = array();
		$opt['verb'] = 'PUT';
		$opt['headers'] = array(
			'Content-Type' => 'application/xml',
			'x-amz-acl' => $acl
		);

		// Defaults
		$this->set_region($region);
		$xml = simplexml_load_string($this->base_location_constraint);

		switch ($region)
		{
			case self::REGION_US_W1:    // Northern California
			case self::REGION_APAC_SE1: // Singapore
				$xml->LocationConstraint = $region;
				$opt['body'] = $xml->asXML();
				break;

			case self::REGION_EU_W1:    // Ireland
				$this->path_style = true; // DNS-style doesn't seem to work for creation, only in EU. Switch over to path-style.
				$xml->LocationConstraint = $region;
				$opt['body'] = $xml->asXML();
				break;

			default: // REGION_US_E1 // Northern Virginia
				$opt['body'] = '';
				break;
		}

		$response = $this->authenticate($bucket, $opt);
		$this->path_style = false;

		return $response;
	}

	/**
	 * Method: get_bucket_region()
	 * 	Gets the region in which the specified Amazon S3 bucket is located.
	 *
	 * Access:
	 * 	public
	 *
	 * Parameters:
	 * 	$bucket - _string_ (Required) The name of the bucket to use.
	 * 	$opt - _array_ (Optional) An associative array of parameters that can have the keys listed in the following section.
	 *
	 * Keys for the $opt parameter:
	 * 	preauth - _integer_|_string_ (Optional) Specifies that a presigned URL for this request should be returned. May be passed as a number of seconds since UNIX Epoch, or any string compatible with `strtotime()`.
	 * 	returnCurlHandle - _boolean_ (Optional) A private toggle specifying that the cURL handle be returned rather than actually completing the request. This toggle is useful for manually managed batch requests.
	 *
	 * Returns:
	 * 	_CFResponse_ A <CFResponse> object containing a parsed HTTP response.
	 */
	public function get_bucket_region($bucket, $opt = null)
	{
		// Add this to our request
		if (!$opt) $opt = array();
		$opt['verb'] = 'GET';
		$opt['sub_resource'] = 'location';

		// Authenticate to S3
		$response = $this->authenticate($bucket, $opt);

		if ($response->isOK())
		{
			// Handle body
			$response->body = (string) $response->body;
		}

		return $response;
	}

	/**
	 * Method: get_bucket_headers()
	 * 	Gets the HTTP headers for the specified Amazon S3 bucket.
	 *
	 * Access:
	 * 	public
	 *
	 * Parameters:
	 * 	$bucket - _string_ (Required) The name of the bucket to use.
	 * 	$opt - _array_ (Optional) An associative array of parameters that can have the keys listed in the following section.
	 *
	 * Keys for the $opt parameter:
	 * 	preauth - _integer_|_string_ (Optional) Specifies that a presigned URL for this request should be returned. May be passed as a number of seconds since UNIX Epoch, or any string compatible with `strtotime()`.
	 * 	returnCurlHandle - _boolean_ (Optional) A private toggle specifying that the cURL handle be returned rather than actually completing the request. This toggle is useful for manually managed batch requests.
	 *
	 * Returns:
	 * 	_CFResponse_ A <CFResponse> object containing a parsed HTTP response.
	 */
	public function get_bucket_headers($bucket, $opt = null)
	{
		if (!$opt) $opt = array();
		$opt['verb'] = 'HEAD';

		return $this->authenticate($bucket, $opt);
	}

	/**
	 * Method: delete_bucket()
	 * 	Deletes a bucket from an Amazon S3 account. A bucket must be empty before the bucket itself can be
	 * 	deleted.
	 *
	 * Access:
	 * 	public
	 *
	 * Parameters:
	 * 	$bucket - _string_ (Required) The name of the bucket to use.
	 * 	$force - _boolean_ (Optional) Whether to force-delete the bucket and all of its contents. The default value is `false`.
	 * 	$opt - _array_ (Optional) An associative array of parameters that can have the keys listed in the following section.
	 *
	 * Keys for the $opt parameter:
	 * 	returnCurlHandle - _boolean_ (Optional) A private toggle specifying that the cURL handle be returned rather than actually completing the request. This toggle is useful for manually managed batch requests.
	 *
	 * Returns:
	 * 	_mixed_ A <CFResponse> object if the bucket was deleted successfully. Returns _boolean_ `false` if otherwise.
	 */
	public function delete_bucket($bucket, $force = false, $opt = null)
	{
		// Set default value
		$success = true;

		if ($force)
		{
			// Delete all of the items from the bucket.
			$success = $this->delete_all_object_versions($bucket);
		}

		// As long as we were successful...
		if ($success)
		{
			if (!$opt) $opt = array();
			$opt['verb'] = 'DELETE';

			return $this->authenticate($bucket, $opt);
		}

		return false;
>>>>>>> f89d276c08923c32850e8d991a1f67c0cc2e13cb
	}

	/**
	 * Method: list_buckets()
<<<<<<< HEAD
	 * 	Gets a list of all of the buckets on the S3 account.
	 *
	 * Access:
	 * 	public
 	 *
	 * Parameters:
	 * 	returnCurlHandle - _boolean_ (Optional) A private toggle that will return the CURL handle for the request rather than actually completing the request. This is useful for MultiCURL requests.
	 *
	 * Returns:
	 * 	<ResponseCore> object
 	 *
	 * See Also:
	 * 	AWS Method - http://docs.amazonwebservices.com/AmazonS3/latest/RESTServiceGET.html
	 * 	Related - <get_bucket_list()>
	 */
	public function list_buckets($returnCurlHandle = null)
	{
		// Add this to our request
		$opt = array();
		$opt['verb'] = HTTP_GET;
		$opt['method'] = 'list_buckets';
		$opt['returnCurlHandle'] = $returnCurlHandle;

		// Authenticate to S3
		return $this->authenticate('', $opt);
	}

	/**
	 * Method: get_bucket_list()
	 * 	ONLY lists the bucket names, as an array, on the S3 account.
	 *
	 * Access:
	 * 	public
 	 *
	 * Parameters:
	 * 	pcre - _string_ (Optional) A Perl-Compatible Regular Expression (PCRE) to filter the names against.
	 *
	 * Returns:
	 * 	_array_ The list of matching bucket names.
 	 *
	 * See Also:
	 * 	Related - <list_buckets()>
	 */
	public function get_bucket_list($pcre = null)
	{
		// Set some default values
		$bucketnames = array();

		// Get a list of buckets.
		$list = $this->list_buckets();

		// If we have a PCRE regex, store it.
		if ($pcre)
		{
			// Loop through and find the bucket names.
			foreach ($list->body->Buckets->Bucket as $bucket)
			{
				$bucket = (string) $bucket->Name;

				if (preg_match($pcre, $bucket))
				{
					$bucketnames[] = $bucket;
				}
			}
		}
		else
		{
			// Loop through and find the bucket names.
			foreach ($list->body->Buckets->Bucket as $bucket)
			{
				$bucketnames[] = (string) $bucket->Name;
			}
		}

		return (count($bucketnames) > 0) ? $bucketnames : null;
=======
	 * 	Gets a list of all buckets contained in the caller's Amazon S3 account.
	 *
	 * Access:
	 * 	public
	 *
	 * Parameters:
	 * 	$opt - _array_ (Optional) An associative array of parameters that can have the keys listed in the following section.
	 *
	 * Keys for the $opt parameter:
	 * 	preauth - _integer_|_string_ (Optional) Specifies that a presigned URL for this request should be returned. May be passed as a number of seconds since UNIX Epoch, or any string compatible with `strtotime()`.
	 * 	returnCurlHandle - _boolean_ (Optional) A private toggle specifying that the cURL handle be returned rather than actually completing the request. This toggle is useful for manually managed batch requests.
	 *
	 * Returns:
	 * 	_CFResponse_ A <CFResponse> object containing a parsed HTTP response.
	 */
	public function list_buckets($opt = null)
	{
		if (!$opt) $opt = array();
		$opt['verb'] = 'GET';

		return $this->authenticate('', $opt);
>>>>>>> f89d276c08923c32850e8d991a1f67c0cc2e13cb
	}

	/**
	 * Method: get_bucket_acl()
<<<<<<< HEAD
	 * 	Gets the ACL settings for a bucket.
	 *
	 * Access:
	 * 	public
 	 *
	 * Parameters:
	 * 	bucket - _string_ (Required) The name of the bucket to be used.
	 * 	returnCurlHandle - _boolean_ (Optional) A private toggle that will return the CURL handle for the request rather than actually completing the request. This is useful for MultiCURL requests.
	 *
	 * Returns:
	 * 	<ResponseCore> object
 	 *
	 * See Also:
	 * 	AWS Method - http://docs.amazonwebservices.com/AmazonS3/latest/RESTAccessPolicy.html
	 * 	Related - <set_object_acl()>, <set_bucket_acl()>, <get_object_acl()>
	 */
	public function get_bucket_acl($bucket, $returnCurlHandle = null)
	{
		// Add this to our request
		$opt = array();
		$opt['verb'] = HTTP_GET;
		$opt['method'] = 'get_bucket_acl';
		$opt['returnCurlHandle'] = $returnCurlHandle;
=======
	 * 	Gets the access control list (ACL) settings for the specified Amazon S3 bucket.
	 *
	 * Access:
	 * 	public
	 *
	 * Parameters:
	 * 	$bucket - _string_ (Required) The name of the bucket to use.
	 * 	$opt - _array_ (Optional) An associative array of parameters that can have the keys listed in the following section.
	 *
	 * Keys for the $opt parameter:
	 * 	preauth - _integer_|_string_ (Optional) Specifies that a presigned URL for this request should be returned. May be passed as a number of seconds since UNIX Epoch, or any string compatible with `strtotime()`.
	 * 	returnCurlHandle - _boolean_ (Optional) A private toggle specifying that the cURL handle be returned rather than actually completing the request. This toggle is useful for manually managed batch requests.
	 *
	 * Returns:
	 * 	_CFResponse_ A <CFResponse> object containing a parsed HTTP response.
	 *
	 * See Also:
	 * 	[REST Access Control Policy](http://docs.amazonwebservices.com/AmazonS3/latest/RESTAccessPolicy.html)
	 */
	public function get_bucket_acl($bucket, $opt = null)
	{
		// Add this to our request
		if (!$opt) $opt = array();
		$opt['verb'] = 'GET';
		$opt['sub_resource'] = 'acl';
>>>>>>> f89d276c08923c32850e8d991a1f67c0cc2e13cb

		// Authenticate to S3
		return $this->authenticate($bucket, $opt);
	}

	/**
	 * Method: set_bucket_acl()
<<<<<<< HEAD
	 * 	Sets the ACL settings for a bucket.
	 *
	 * Access:
	 * 	public
 	 *
	 * Parameters:
	 * 	bucket - _string_ (Required) The name of the bucket to be used.
	 * 	acl - _string_ (Optional) One of the following options: <S3_ACL_PRIVATE>, <S3_ACL_PUBLIC>, <S3_ACL_OPEN>, or <S3_ACL_AUTH_READ>. Alternatively, an array of associative arrays. Each associative array contains an 'id' and a 'permission'. Defaults to <S3_ACL_PRIVATE>.
	 * 	returnCurlHandle - _boolean_ (Optional) A private toggle that will return the CURL handle for the request rather than actually completing the request. This is useful for MultiCURL requests.
	 *
	 * Returns:
	 * 	<ResponseCore> object
 	 *
	 * See Also:
	 * 	AWS Method - http://docs.amazonwebservices.com/AmazonS3/latest/RESTAccessPolicy.html
	 * 	Related - <set_object_acl()>, <get_bucket_acl()>, <get_object_acl()>
	 */
	public function set_bucket_acl($bucket, $acl = S3_ACL_PRIVATE, $returnCurlHandle = null)
	{
		// Add this to our request
		$opt = array();
		$opt['verb'] = HTTP_PUT;
		$opt['method'] = 'set_bucket_acl';
		$opt['returnCurlHandle'] = $returnCurlHandle;
=======
	 * 	Sets the access control list (ACL) settings for the specified Amazon S3 bucket.
	 *
	 * Access:
	 * 	public
	 *
	 * Parameters:
	 * 	$bucket - _string_ (Required) The name of the bucket to use.
	 * 	$acl - _string_ (Optional) The ACL settings for the specified bucket. Accepts any of the following constants: <ACL_PRIVATE>, <ACL_PUBLIC>, <ACL_OPEN>, <ACL_AUTH_READ>, <ACL_OWNER_READ> or <ACL_OWNER_FULL_CONTROL>. Alternatively, an array of associative arrays. Each associative array contains an `id` and a `permission`. The default value is <ACL_PRIVATE>.
	 * 	$opt - _array_ (Optional) An associative array of parameters that can have the keys listed in the following section.
	 *
	 * Keys for the $opt parameter:
	 * 	returnCurlHandle - _boolean_ (Optional) A private toggle specifying that the cURL handle be returned rather than actually completing the request. This toggle is useful for manually managed batch requests.
	 *
	 * Returns:
	 * 	_CFResponse_ A <CFResponse> object containing a parsed HTTP response.
	 *
	 * See Also:
	 * 	[REST Access Control Policy](http://docs.amazonwebservices.com/AmazonS3/latest/RESTAccessPolicy.html)
	 */
	public function set_bucket_acl($bucket, $acl = self::ACL_PRIVATE, $opt = null)
	{
		// Add this to our request
		if (!$opt) $opt = array();
		$opt['verb'] = 'PUT';
		$opt['sub_resource'] = 'acl';
		$opt['headers'] = array(
			'Content-Type' => 'application/xml'
		);
>>>>>>> f89d276c08923c32850e8d991a1f67c0cc2e13cb

		// Make sure these are defined.
		if (!defined('AWS_CANONICAL_ID') || !defined('AWS_CANONICAL_NAME'))
		{
			// Fetch the data live.
			$canonical = $this->get_canonical_user_id();
			define('AWS_CANONICAL_ID', $canonical['id']);
			define('AWS_CANONICAL_NAME', $canonical['display_name']);
<<<<<<< HEAD

			// Issue a notice.
			trigger_error('One or both of the configuration settings AWS_CANONICAL_ID and AWS_CANONICAL_NAME have NOT been set in config.inc.php. ' . CLOUDFUSION_NAME . ' must make additional requests to fetch the data, resulting in slower performance for ' . __FUNCTION__ . '(). For best performance, be sure to define these values in your config.inc.php file. For more details, see http://tarzan-aws.googlecode.com/svn/tags/' . CLOUDFUSION_VERSION . '/config-sample.inc.php', E_USER_NOTICE);
=======
>>>>>>> f89d276c08923c32850e8d991a1f67c0cc2e13cb
		}

		if (is_array($acl))
		{
			$opt['body'] = $this->generate_access_policy(AWS_CANONICAL_ID, AWS_CANONICAL_NAME, $acl);
		}
		else
		{
<<<<<<< HEAD
			$opt['acl'] = $acl;
=======
			$opt['headers']['x-amz-acl'] = $acl;
>>>>>>> f89d276c08923c32850e8d991a1f67c0cc2e13cb
		}

		// Authenticate to S3
		return $this->authenticate($bucket, $opt);
	}


	/*%******************************************************************************************%*/
	// OBJECT METHODS

	/**
	 * Method: create_object()
<<<<<<< HEAD
	 * 	Once you have a bucket, you can start storing objects in it. Objects are stored using the HTTP PUT method. Each object can hold up to 5 GB of data. When you store an object, S3 streams the data to multiple storage servers in multiple data centers to ensure that the data remains available in the event of internal network or hardware failure.
	 *
	 * Access:
	 * 	public
 	 *
	 * Parameters:
	 * 	bucket - _string_ (Required) The name of the bucket to be used.
 	 * 	opt - _array_ (Required) Associative array of parameters which can have the following keys:
 	 *
 	 * Keys for the $opt parameter:
 	 * 	filename - _string_ (Required) The filename for the object.
	 * 	body - _string_ (Required) The data to be stored in the object. Either this or inputFilename is required.
	 * 	inputFilename - _string_ (Optional) Upload this file instead of the body data. Either this or body is required.
	 * 	contentType - _string_ (Required) The type of content that is being sent in the body.
	 * 	acl - _string_ (Optional) One of the following options: <S3_ACL_PRIVATE>, <S3_ACL_PUBLIC>, <S3_ACL_OPEN>, or <S3_ACL_AUTH_READ>. Defaults to <S3_ACL_PRIVATE>.
	 * 	headers - _array_ (Optional) Standard HTTP headers to send along in the request.
	 * 	meta - _array_ (Optional) Associative array of key-value pairs. Represented by x-amz-meta-: Any header starting with this prefix is considered user metadata. It will be stored with the object and returned when you retrieve the object. The total size of the HTTP request, not including the body, must be less than 4 KB.
	 * 	returnCurlHandle - _boolean_ (Optional) A private toggle that will return the CURL handle for the request rather than actually completing the request. This is useful for MultiCURL requests.
	 *
	 * Returns:
	 * 	<ResponseCore> object
 	 *
	 * See Also:
	 * 	AWS Method - http://docs.amazonwebservices.com/AmazonS3/latest/RESTObjectPUT.html
	 * 	ACL Policy - http://docs.amazonwebservices.com/AmazonS3/latest/RESTAccessPolicy.html
	 * 	Related - <get_object()>, <head_object()>, <delete_object()>
	 */
	public function create_object($bucket, $opt = null)
	{
		if (!$opt) $opt = array();

		// Add this to our request
		$opt['verb'] = HTTP_PUT;
		$opt['method'] = 'create_object';
		$opt['filename'] = $opt['filename'];

		// Authenticate to S3
		return $this->authenticate($bucket, $opt);
	}

	/**
	 * Method: get_object()
	 * 	Reads the contents of an object within a bucket.
	 *
	 * Access:
	 * 	public
 	 *
	 * Parameters:
	 * 	bucket - _string_ (Required) The name of the bucket to be used.
	 * 	filename - _string_ (Required) The filename for the object.
	 * 	opt - _array_ (Optional) Associative array of parameters which can have the following keys:
	 *
	 * Keys for the $opt parameter:
	 * 	lastmodified - _string_ (Optional) The LastModified header passed in from a previous request. If used, requires 'etag' as well. Will return a 304 if file hasn't changed.
	 * 	etag - _string_ (Optional) The ETag header passed in from a previous request. If used, requires 'lastmodified' as well. Will return a 304 if file hasn't changed.
	 * 	range - _string_ (Optional) A range of bytes to fetch from the file. Useful for downloading partial bits or completing incomplete files. Range notated with a hyphen (e.g. 0-10485759). Defaults to the complete file.
	 * 	returnCurlHandle - _boolean_ (Optional) A private toggle that will return the CURL handle for the request rather than actually completing the request. This is useful for MultiCURL requests.
	 *
	 * Returns:
	 * 	<ResponseCore> object
 	 *
	 * See Also:
	 * 	AWS Method - http://docs.amazonwebservices.com/AmazonS3/latest/RESTObjectGET.html
	 * 	Related - <create_object()>, <head_object()>, <delete_object()>
	 */
	public function get_object($bucket, $filename, $opt = null)
	{
		if (!$opt) $opt = array();

		// Add this to our request
		$opt['verb'] = HTTP_GET;
		$opt['method'] = 'get_object';
		$opt['filename'] = $filename;

		// Authenticate to S3
		return $this->authenticate($bucket, $opt);
	}

	/**
	 * Method: head_object()
	 * 	Reads only the HTTP headers of an object within a bucket.
	 *
	 * Access:
	 * 	public
 	 *
	 * Parameters:
	 * 	bucket - _string_ (Required) The name of the bucket to be used.
 	 * 	filename - _string_ (Required) The filename for the object.
	 * 	returnCurlHandle - _boolean_ (Optional) A private toggle that will return the CURL handle for the request rather than actually completing the request. This is useful for MultiCURL requests.
	 *
	 * Returns:
	 * 	<ResponseCore> object
 	 *
	 * See Also:
	 * 	AWS Method - http://docs.amazonwebservices.com/AmazonS3/latest/RESTObjectHEAD.html
	 * 	Related - <create_object()>, <get_object()>, <delete_object()>, <if_object_exists()>
	 */
	public function head_object($bucket, $filename, $returnCurlHandle = null)
	{
		// Add this to our request
		$opt = array();
		$opt['verb'] = HTTP_HEAD;
		$opt['method'] = 'head_object';
		$opt['filename'] = $filename;
		$opt['returnCurlHandle'] = $returnCurlHandle;

		// Authenticate to S3
		return $this->authenticate($bucket, $opt);
	}

	/**
	 * Method: if_object_exists()
	 * 	Checks whether this object already exists in this bucket.
	 *
	 * Access:
	 * 	public
 	 *
	 * Parameters:
	 * 	bucket - _string_ (Required) The name of the bucket to be used.
 	 * 	filename - _string_ (Required) The filename for the object.
	 *
	 * Returns:
	 * 	_boolean_ Whether the object exists or not.
 	 *
	 * See Also:
	 * 	Related - <head_object()>
	 */
	public function if_object_exists($bucket, $filename)
	{
		$header = $this->head_object($bucket, $filename);

		if ($header->isOK())
		{
			return true;
		}
		elseif ($header->status === 404)
		{
			return false;
		}
		else
		{
			return null;
		}
	}

	/**
	 * Method: delete_object()
	 * 	Deletes an object from within a bucket.
	 *
	 * Access:
	 * 	public
 	 *
	 * Parameters:
	 * 	bucket - _string_ (Required) The name of the bucket to be used.
 	 * 	filename - _string_ (Required) The filename for the object.
	 * 	returnCurlHandle - _boolean_ (Optional) A private toggle that will return the CURL handle for the request rather than actually completing the request. This is useful for MultiCURL requests.
	 *
	 * Returns:
	 * 	<ResponseCore> object
 	 *
	 * See Also:
	 * 	AWS Method - http://docs.amazonwebservices.com/AmazonS3/latest/RESTObjectDELETE.html
	 * 	Related - <create_object()>, <get_object()>, <head_object()>, <delete_all_objects()>
	 */
	public function delete_object($bucket, $filename, $returnCurlHandle = null)
	{
		// Add this to our request
		$opt = array();
		$opt['verb'] = HTTP_DELETE;
		$opt['method'] = 'delete_object';
		$opt['filename'] = $filename;
		$opt['returnCurlHandle'] = $returnCurlHandle;

		// Authenticate to S3
		return $this->authenticate($bucket, $opt);
	}

	/**
	 * Method: delete_all_objects()
	 * 	Delete all of the objects inside the specified bucket.
	 *
	 * Access:
	 * 	public
 	 *
	 * Parameters:
	 * 	bucket - _string_ (Required) The name of the bucket to be used.
	 * 	pcre - _string_ (Optional) A Perl-Compatible Regular Expression (PCRE) to filter the names against. Defaults to <S3_PCRE_ALL>.
	 *
	 * Returns:
	 * 	_boolean_ Determines the success of deleting all files.
 	 *
	 * See Also:
	 * 	Related - <delete_object()>
	 */
	public function delete_all_objects($bucket, $pcre = S3_PCRE_ALL)
	{
		// Collect all matches
		$list = $this->get_object_list($bucket, array('pcre' => $pcre));

		// As long as we have at least one match...
		if (count($list) > 0)
		{
			// Hold CURL handles
			$handles = array();

			// Go through all of the items and delete them.
			foreach ($list as $item)
			{
				$handles[] = $this->delete_object($bucket, $item, true);
			}

			$request = new $this->request_class(null);
			return $request->send_multi_request($handles);
		}

		return false;
	}

	/**
	 * Method: list_objects()
	 * 	Lists the objects in a bucket. Provided as the 'GetBucket' action in Amazon's REST API.
	 *
	 * Access:
	 * 	public
 	 *
	 * Parameters:
	 * 	bucket - _string_ (Required) The name of the bucket to be used.
	 * 	opt - _array_ (Required) Associative array of parameters which can have the following keys:
	 *
	 * Keys for the $opt parameter:
	 * 	prefix - _string_ (Optional) Restricts the response to only contain results that begin with the specified prefix.
	 * 	marker - _string_ (Optional) It restricts the response to only contain results that occur alphabetically after the value of marker.
	 * 	maxKeys - _string_ (Optional) Limits the number of results returned in response to your query. Will return no more than this number of results, but possibly less.
	 * 	delimiter - _string_ (Optional) Unicode string parameter. Keys that contain the same string between the prefix and the first occurrence of the delimiter will be rolled up into a single result element in the CommonPrefixes collection.
	 * 	returnCurlHandle - _boolean_ (Optional) A private toggle that will return the CURL handle for the request rather than actually completing the request. This is useful for MultiCURL requests.
	 *
	 * Returns:
	 * 	<ResponseCore> object
 	 *
	 * See Also:
	 * 	AWS Method - http://docs.amazonwebservices.com/AmazonS3/latest/RESTBucketGET.html
	 * 	List Keys - http://docs.amazonwebservices.com/AmazonS3/latest/ListingKeysRequest.html
	 * 	Related - <get_bucket()>, <get_object_list()>
	 */
	public function list_objects($bucket, $opt = null)
	{
		if (!$opt) $opt = array();

		// Add this to our request
		$opt['verb'] = HTTP_GET;
		$opt['method'] = 'list_objects';

		// Authenticate to S3
		return $this->authenticate($bucket, $opt);
	}

	/**
	 * Method: get_object_filesize()
	 * 	Gets the file size of the object.
	 *
	 * Access:
	 * 	public
 	 *
	 * Parameters:
	 * 	bucket - _string_ (Required) The name of the bucket to be used.
 	 * 	filename - _string_ (Required) The filename for the object.
	 * 	friendly_format - _boolean_ (Optional) Whether to format the value to 2 decimal points using the largest possible unit (i.e. 3.42 GB).
	 *
	 * Returns:
	 * 	_integer_|_string_ The number of bytes as an integer, or the friendly format as a string.
 	 *
	 * See Also:
	 * 	Related - <get_bucket_filesize()>
	 */
	public function get_object_filesize($bucket, $filename, $friendly_format = false)
	{
		$object = $this->head_object($bucket, $filename);
		$filesize = (integer) $object->header['content-length'];

		if ($friendly_format)
		{
			$filesize = $this->util->size_readable($filesize);
		}

		return $filesize;
=======
	 * 	Creates an Amazon S3 object. After an Amazon S3 bucket is created, objects can be stored in it.
	 *
	 * 	Each object can hold up to 5 GB of data. When an object is stored in Amazon S3, the data is streamed
	 * 	to multiple storage servers in multiple data centers. This ensures the data remains available in the
	 * 	event of internal network or hardware failure.
	 *
	 * Access:
	 * 	public
	 *
	 * Parameters:
	 * 	$bucket - _string_ (Required) The name of the bucket to use.
	 * 	$filename - _string_ (Required) The file name for the object.
	 * 	$opt - _array_ (Optional) An associative array of parameters that can have the keys listed in the following section.
	 *
	 * Keys for the $opt parameter:
	 * 	body - _string_ (Required; Conditional) The data to be stored in the object. Either this parameter or `fileUpload` must be specified.
	 * 	fileUpload - _string_ (Required; Conditional) Upload this file instead of the body data. Either this parameter or `body` is required.
	 * 	contentType - _string_ (Optional) The type of content that is being sent in the body. If a file is being uploaded via `fileUpload`, it will attempt to determine the correct mime-type based on the file extension. The default value is `application/octet-stream`.
	 * 	acl - _string_ (Optional) The ACL settings for the specified object. Accepts the following constants: <ACL_PRIVATE>, <ACL_PUBLIC>, <ACL_OPEN>, <ACL_AUTH_READ>, <ACL_OWNER_READ> or <ACL_OWNER_FULL_CONTROL>. The default value is <ACL_PRIVATE>.
	 * 	storage - _string_ (Optional) Whether to use Standard or Reduced Redundancy storage. Accepts either of the following constants: <STORAGE_STANDARD> or <STORAGE_REDUCED>. The default value is <STORAGE_STANDARD>.
	 * 	headers - _array_ (Optional) The standard HTTP headers to send along in the request.
	 * 	meta - _array_ (Optional) An associative array of key-value pairs. Represented by x-amz-meta-: Any header starting with this prefix is considered user metadata. It will be stored with the object and returned when you retrieve the object. The total size of the HTTP request, not including the body, must be less than 4 KB.
	 * 	returnCurlHandle - _boolean_ (Optional) A private toggle specifying that the cURL handle be returned rather than actually completing the request. This toggle is useful for manually managed batch requests.
	 *
	 * Returns:
	 * 	_CFResponse_ A <CFResponse> object containing a parsed HTTP response.
	 *
	 * See Also:
	 * 	[REST Access Control Policy](http://docs.amazonwebservices.com/AmazonS3/latest/RESTAccessPolicy.html)
	 */
	public function create_object($bucket, $filename, $opt = null)
	{
		if (!$opt) $opt = array();

		// Add this to our request
		$opt['verb'] = 'PUT';
		$opt['resource'] = $filename;

		// Handle content type. Can also be passed as an HTTP header.
		if (isset($opt['contentType']))
		{
			$opt['headers']['Content-Type'] = $opt['contentType'];
			unset($opt['contentType']);
		}

		// Handle Access Control Lists. Can also be passed as an HTTP header.
		if (isset($opt['acl']))
		{
			$opt['headers']['x-amz-acl'] = $opt['acl'];
			unset($opt['acl']);
		}

		// Handle storage settings. Can also be passed as an HTTP header.
		if (isset($opt['storage']))
		{
			$opt['headers']['x-amz-storage-class'] = $opt['storage'];
			unset($opt['storage']);
		}

		// Handle meta tags. Can also be passed as an HTTP header.
		if (isset($opt['meta']))
		{
			foreach ($opt['meta'] as $meta_key => $meta_value)
			{
				// e.g., `My Meta Header` is converted to `x-amz-meta-my-meta-header`.
				$opt['headers']['x-amz-meta-' . strtolower(str_replace(' ', '-', $meta_key))] = $meta_value;
			}
			unset($opt['meta']);
		}

		// Authenticate to S3
		$response = $this->authenticate($bucket, $opt);

		return $response;
	}

	/**
	 * Method: get_object()
	 * 	Gets the contents of an Amazon S3 object in the specified bucket.
	 *
	 * Access:
	 * 	public
	 *
	 * Parameters:
	 * 	$bucket - _string_ (Required) The name of the bucket to use.
	 * 	$filename - _string_ (Required) The file name for the object.
	 * 	$opt - _array_ (Optional) An associative array of parameters that can have the keys listed in the following section.
	 *
	 * Keys for the $opt parameter:
	 * 	fileDownload - _string_ (Optional) The file system location to download the file to. Must be a server-writable location.
	 * 	versionId - _string_ (Optional) The version of the object to retrieve. Version IDs are returned in the `x-amz-version-id` header of any previous object-related request.
	 * 	lastmodified - _string_ (Optional) The `LastModified` header passed in from a previous request. If specified, request `etag` option must be specified as well. Will trigger a `304 Not Modified` status code if the file hasn't changed.
	 * 	etag - _string_ (Optional) The `ETag` header passed in from a previous request. If specified, request `lastmodified` option must be specified as well. Will trigger a `304 Not Modified` status code if the file hasn't changed.
	 * 	range - _string_ (Optional) The range of bytes to fetch from the object. Specify this parameter when downloading partial bits or completing incomplete object downloads. The specified range must be notated with a hyphen (e.g., 0-10485759). Defaults to the byte range of the complete Amazon S3 object.
	 * 	preauth - _integer_|_string_ (Optional) Specifies that a presigned URL for this request should be returned. May be passed as a number of seconds since UNIX Epoch, or any string compatible with `strtotime()`.
	 * 	returnCurlHandle - _boolean_ (Optional) A private toggle specifying that the cURL handle be returned rather than actually completing the request. This toggle is useful for manually managed batch requests.
	 *
	 * Returns:
	 * 	_CFResponse_ A <CFResponse> object containing a parsed HTTP response.
	 */
	public function get_object($bucket, $filename, $opt = null)
	{
		if (!$opt) $opt = array();

		// Add this to our request
		$opt['verb'] = 'GET';
		$opt['resource'] = $filename;
		$opt['headers'] = array();

		// Are we checking for changes?
		if (isset($opt['lastmodified']) && isset($opt['etag']))
		{
			$opt['headers']['If-Modified-Since'] = $opt['lastmodified'];
			$opt['headers']['If-None-Match'] = $opt['etag'];
		}

		// Partial content range
		if (isset($opt['range']))
		{
			$opt['headers']['Range'] = 'bytes=' . $opt['range'];
		}

		// Authenticate to S3
		return $this->authenticate($bucket, $opt);
	}

	/**
	 * Method: get_object_headers()
	 * 	Gets the HTTP headers for the specified Amazon S3 object.
	 *
	 * Access:
	 * 	public
	 *
	 * Parameters:
	 * 	$bucket - _string_ (Required) The name of the bucket to use.
	 * 	$filename - _string_ (Required) The file name for the object.
	 * 	$opt - _array_ (Optional) An associative array of parameters that can have the keys listed in the following section.
	 *
	 * Keys for the $opt parameter:
	 * 	versionId - _string_ (Optional) The version of the object to retrieve. Version IDs are returned in the `x-amz-version-id` header of any previous object-related request.
	 * 	preauth - _integer_|_string_ (Optional) Specifies that a presigned URL for this request should be returned. May be passed as a number of seconds since UNIX Epoch, or any string compatible with `strtotime()`.
	 * 	returnCurlHandle - _boolean_ (Optional) A private toggle specifying that the cURL handle be returned rather than actually completing the request. This toggle is useful for manually managed batch requests.
	 *
	 * Returns:
	 * 	_CFResponse_ A <CFResponse> object containing a parsed HTTP response.
	 */
	public function get_object_headers($bucket, $filename, $opt = null)
	{
		// Add this to our request
		if (!$opt) $opt = array();
		$opt['verb'] = 'HEAD';
		$opt['resource'] = $filename;

		// Authenticate to S3
		return $this->authenticate($bucket, $opt);
	}

	/**
	 * Method: delete_object()
	 * 	Deletes an Amazon S3 object from the specified bucket.
	 *
	 * Access:
	 * 	public
	 *
	 * Parameters:
	 * 	$bucket - _string_ (Required) The name of the bucket to use.
	 * 	$filename - _string_ (Required) The file name for the object.
	 * 	$opt - _array_ (Optional) An associative array of parameters that can have the keys listed in the following section.
	 *
	 * Keys for the $opt parameter:
	 * 	versionId - _string_ (Optional) The version of the object to delete. Version IDs are returned in the `x-amz-version-id` header of any previous object-related request.
	 * 	MFASerial - _string_ (Optional) The serial number on the back of the Gemalto device. `MFASerial` and `MFAToken` must both be set for MFA to work.
	 * 	MFAToken - _string_ (Optional) The current token displayed on the Gemalto device. `MFASerial` and `MFAToken` must both be set for MFA to work.
	 * 	returnCurlHandle - _boolean_ (Optional) A private toggle specifying that the cURL handle be returned rather than actually completing the request. This toggle is useful for manually managed batch requests.
	 *
	 * Returns:
	 * 	_CFResponse_ A <CFResponse> object containing a parsed HTTP response.
	 *
	 * See Also:
	 * 	* [Multi-Factor Authentication](http://aws.amazon.com/mfa/)
	 */
	public function delete_object($bucket, $filename, $opt = null)
	{
		// Add this to our request
		if (!$opt) $opt = array();
		$opt['verb'] = 'DELETE';
		$opt['resource'] = $filename;

		// Enable MFA delete?
		if (isset($opt['MFASerial']) && isset($opt['MFAToken']))
		{
			$opt['headers'] = array(
				'x-amz-mfa' => ($opt['MFASerial'] . ' ' . $opt['MFAToken'])
			);
		}

		// Authenticate to S3
		return $this->authenticate($bucket, $opt);
	}

	/**
	 * Method: list_objects()
	 * 	Gets a list of all Amazon S3 objects in the specified bucket.
	 *
	 * Access:
	 * 	public
	 *
	 * Parameters:
	 * 	$bucket - _string_ (Required) The name of the bucket to use.
	 * 	$opt - _array_ (Optional) An associative array of parameters that can have the keys listed in the following section.
	 *
	 * Keys for the $opt parameter:
	 * 	delimiter - _string_ (Optional) Keys that contain the same string between the prefix and the first occurrence of the delimiter will be rolled up into a single result element in the CommonPrefixes collection.
	 * 	marker - _string_ (Optional) Restricts the response to contain results that occur only alphabetically after the value of the marker.
	 * 	max-keys - _string_ (Optional) The maximum number of results returned by the method call. The returned list will contain no more results than the specified value, but may return less.
	 * 	preauth - _integer_|_string_ (Optional) Specifies that a presigned URL for this request should be returned. May be passed as a number of seconds since UNIX Epoch, or any string compatible with `strtotime()`.
	 * 	prefix - _string_ (Optional) Restricts the response to contain results that begin only with the specified prefix.
	 * 	returnCurlHandle - _boolean_ (Optional) A private toggle specifying that the cURL handle be returned rather than actually completing the request. This toggle is useful for manually managed batch requests.
	 *
	 * Returns:
	 * 	_CFResponse_ A <CFResponse> object containing a parsed HTTP response.
	 */
	public function list_objects($bucket, $opt = null)
	{
		if (!$opt) $opt = array();

		// Add this to our request
		$opt['verb'] = 'GET';

		foreach (array('delimiter', 'marker', 'max-keys', 'prefix') as $param)
		{
			if (isset($opt[$param]))
			{
				$opt['query_string'][$param] = $opt[$param];
				unset($opt[$param]);
			}
		}

		// Authenticate to S3
		return $this->authenticate($bucket, $opt);
	}

	/**
	 * Method: copy_object()
	 * 	Copies an Amazon S3 object to a new location, whether in the same Amazon S3 region, bucket, or
	 * 	otherwise.
	 *
	 * Access:
	 * 	public
	 *
	 * Parameters:
	 * 	$source - _array_ (Required) An associative array containing two keys: `bucket`, specifying the name of the bucket containing the source object, and `filename`, specifying the file name of the source object to copy.
	 * 	$dest - _array_ (Required) An associative array containing two keys: `bucket`, specifying the name of the bucket to store the destination object in, and `filename`, specifying the file name of the destination object name.
	 * 	$opt - _array_ (Optional) An associative array of parameters that can have the keys listed in the following section.
	 *
	 * Keys for the $opt parameter:
	 * 	acl - _string_ (Optional) The ACL settings for the specified object. Accepts the following constants: <ACL_PRIVATE>, <ACL_PUBLIC>, <ACL_OPEN>, <ACL_AUTH_READ>, <ACL_OWNER_READ> or <ACL_OWNER_FULL_CONTROL>. The default value is <ACL_PRIVATE>.
	 * 	storage - _string_ (Optional) Whether to use Standard or Reduced Redundancy storage. Accepts either of the following constants: <STORAGE_STANDARD> or <STORAGE_REDUCED>. The default value is <STORAGE_STANDARD>.
	 * 	versionId - _string_ (Optional) The version of the object to copy. Version IDs are returned in the `x-amz-version-id` header of any previous object-related request.
	 * 	ifMatch - _string_ (Optional) The ETag header from a previous request. Copies the object if its entity tag (ETag) matches the specified tag; otherwise, the request returns a 412 HTTP status code error (precondition failed). Used in conjunction with `ifUnmodifiedSince`.
	 * 	ifUnmodifiedSince - _string_ (Optional) The LastModified header from a previous request. Copies the object if it hasn't been modified since the specified time; otherwise, the request returns a 412 HTTP status code error (precondition failed). Used in conjunction with `ifMatch`.
	 * 	ifNoneMatch - _string_ (Optional) The ETag header from a previous request. Copies the object if its entity tag (ETag) is different than the specified ETag; otherwise, the request returns a 412 HTTP status code error (failed condition). Used in conjunction with `ifModifiedSince`.
	 * 	ifModifiedSince - _string_ (Optional) The LastModified header from a previous request. Copies the object if it has been modified since the specified time; otherwise, the request returns a 412 HTTP status code error (failed condition). Used in conjunction with `ifNoneMatch`.
	 * 	headers - _array_ (Optional) Standard HTTP headers to send along in the request.
	 * 	meta - _array_ (Optional) Associative array of key-value pairs. Represented by x-amz-meta-: Any header starting with this prefix is considered user metadata. It will be stored with the object and returned when you retrieve the object. The total size of the HTTP request, not including the body, must be less than 4 KB.
	 * 	metadataDirective - _string_ (Optional) Accepts either COPY or REPLACE. You will likely never need to use this, as it manages itself with no issues.
	 * 	returnCurlHandle - _boolean_ (Optional) A private toggle specifying that the cURL handle be returned rather than actually completing the request. This toggle is useful for manually managed batch requests.
	 *
	 * Returns:
	 * 	_CFResponse_ A <CFResponse> object containing a parsed HTTP response.
	 *
	 * See Also:
	 * 	[Copying Amazon S3 Objects](http://docs.amazonwebservices.com/AmazonS3/latest/UsingCopyingObjects.html)
	 */
	public function copy_object($source, $dest, $opt = null)
	{
		if (!$opt) $opt = array();

		// Add this to our request
		$opt['verb'] = 'PUT';
		$opt['resource'] = $dest['filename'];

		// Handle copy source
		if (isset($source['bucket']) && isset($source['filename']))
		{
			$opt['headers']['x-amz-copy-source'] = '/' . $source['bucket'] . '/' . rawurlencode($source['filename'])
				. (isset($opt['versionId']) ? ('?' . 'versionId=' . rawurlencode($opt['versionId'])) : ''); // Append the versionId to copy, if available
			unset($opt['versionId']);
		}

		// Handle metadata directive
		$opt['headers']['x-amz-metadata-directive'] = 'COPY';
		if ($source['bucket'] === $dest['bucket'] && $source['filename'] === $dest['filename'])
		{
			$opt['headers']['x-amz-metadata-directive'] = 'REPLACE';
		}
		if (isset($opt['metadataDirective']))
		{
			$opt['headers']['x-amz-metadata-directive'] = $opt['metadataDirective'];
			unset($opt['metadataDirective']);
		}

		// Handle Access Control Lists. Can also be passed as an HTTP header.
		if (isset($opt['acl']))
		{
			$opt['headers']['x-amz-acl'] = $opt['acl'];
			unset($opt['acl']);
		}

		// Handle storage settings. Can also be passed as an HTTP header.
		if (isset($opt['storage']))
		{
			$opt['headers']['x-amz-storage-class'] = $opt['storage'];
			unset($opt['storage']);
		}

		// Handle conditional-copy parameters
		if (isset($opt['ifMatch']))
		{
			$opt['headers']['x-amz-copy-source-if-match'] = $opt['ifMatch'];
			unset($opt['ifMatch']);
		}
		if (isset($opt['ifNoneMatch']))
		{
			$opt['headers']['x-amz-copy-source-if-none-match'] = $opt['ifNoneMatch'];
			unset($opt['ifNoneMatch']);
		}
		if (isset($opt['ifUnmodifiedSince']))
		{
			$opt['headers']['x-amz-copy-source-if-unmodified-since'] = $opt['ifUnmodifiedSince'];
			unset($opt['ifUnmodifiedSince']);
		}
		if (isset($opt['ifModifiedSince']))
		{
			$opt['headers']['x-amz-copy-source-if-modified-since'] = $opt['ifModifiedSince'];
			unset($opt['ifModifiedSince']);
		}

		// Handle meta tags. Can also be passed as an HTTP header.
		if (isset($opt['meta']))
		{
			foreach ($opt['meta'] as $meta_key => $meta_value)
			{
				// e.g., `My Meta Header` is converted to `x-amz-meta-my-meta-header`.
				$opt['headers']['x-amz-meta-' . strtolower(str_replace(' ', '-', $meta_key))] = $meta_value;
			}
			unset($opt['meta']);
		}

		// Authenticate to S3
		return $this->authenticate($dest['bucket'], $opt);
	}

	/**
	 * Method: update_object()
	 * 	Updates an Amazon S3 object with new headers or other metadata.
	 *
	 * 	To replace the content of the specified Amazon S3 object, call <create_object()> with the same bucket
	 * 	and file name parameters.
	 *
	 * Access:
	 * 	public
	 *
	 * Parameters:
	 * 	$bucket - _string_ (Required) The name of the bucket that contains the source file.
	 * 	$filename - _string_ (Required) The source file name that you want to update.
	 * 	$opt - _array_ (Optional) An associative array of parameters that can have the keys listed in the following section.
	 *
	 * Keys for the $opt parameter:
	 * 	acl - _string_ (Optional) The ACL settings for the specified object. Accepts the following constants: <ACL_PRIVATE>, <ACL_PUBLIC>, <ACL_OPEN>, <ACL_AUTH_READ>, <ACL_OWNER_READ> or <ACL_OWNER_FULL_CONTROL>. The default value is <ACL_PRIVATE>.
	 * 	headers - _array_ (Optional) The standard HTTP headers to update the Amazon S3 object with.
	 * 	meta - _array_ (Optional) An associative array of key-value pairs. Any header with the `x-amz-meta-` prefix is considered user metadata and is stored with the Amazon S3 object. It will be stored with the object and returned when you retrieve the object. The total size of the HTTP request, not including the body, must be less than 4 KB.
	 * 	returnCurlHandle - _boolean_ (Optional) A private toggle specifying that the cURL handle be returned rather than actually completing the request. This toggle is useful for manually managed batch requests.
	 *
	 * Returns:
	 * 	_CFResponse_ A <CFResponse> object containing a parsed HTTP response.
	 *
	 * See Also:
	 * 	[Copying Amazon S3 Objects](http://docs.amazonwebservices.com/AmazonS3/latest/UsingCopyingObjects.html)
	 */
	public function update_object($bucket, $filename, $opt = null)
	{
		if (!$opt) $opt = array();
		$opt['metadataDirective'] = 'REPLACE';

		// Authenticate to S3
		return $this->copy_object(
			array('bucket' => $bucket, 'filename' => $filename),
			array('bucket' => $bucket, 'filename' => $filename),
			$opt
		);
	}


	/*%******************************************************************************************%*/
	// ACCESS CONTROL LISTS

	/**
	 * Method: get_object_acl()
	 * 	Gets the access control list (ACL) settings for the specified Amazon S3 object.
	 *
	 * Access:
	 * 	public
	 *
	 * Parameters:
	 * 	$bucket - _string_ (Required) The name of the bucket to use.
	 * 	$filename - _string_ (Required) The file name for the object.
	 * 	$opt - _array_ (Optional) An associative array of parameters that can have the keys listed in the following section.
	 *
	 * Keys for the $opt parameter:
	 * 	versionId - _string_ (Optional) The version of the object to retrieve. Version IDs are returned in the `x-amz-version-id` header of any previous object-related request.
	 * 	preauth - _integer_|_string_ (Optional) Specifies that a presigned URL for this request should be returned. May be passed as a number of seconds since UNIX Epoch, or any string compatible with `strtotime()`.
	 * 	returnCurlHandle - _boolean_ (Optional) A private toggle specifying that the cURL handle be returned rather than actually completing the request. This toggle is useful for manually managed batch requests.
	 *
	 * Returns:
	 * 	_CFResponse_ A <CFResponse> object containing a parsed HTTP response.
	 *
	 * See Also:
	 * 	[REST Access Control Policy](http://docs.amazonwebservices.com/AmazonS3/latest/RESTAccessPolicy.html)
	 */
	public function get_object_acl($bucket, $filename, $opt = null)
	{
		// Add this to our request
		if (!$opt) $opt = array();
		$opt['verb'] = 'GET';
		$opt['resource'] = $filename;
		$opt['sub_resource'] = 'acl';

		// Authenticate to S3
		return $this->authenticate($bucket, $opt);
	}

	/**
	 * Method: set_object_acl()
	 * 	Sets the access control list (ACL) settings for the specified Amazon S3 object.
	 *
	 * Access:
	 * 	public
	 *
	 * Parameters:
	 * 	$bucket - _string_ (Required) The name of the bucket to use.
	 * 	$filename - _string_ (Required) The file name for the object.
	 * 	$acl - _string_ (Optional) The ACL settings for the specified object. Accepts any of the following constants: <ACL_PRIVATE>, <ACL_PUBLIC>, <ACL_OPEN>, <ACL_AUTH_READ>, <ACL_OWNER_READ> or <ACL_OWNER_FULL_CONTROL>. Alternatively, an array of associative arrays. Each associative array contains an `id` and a `permission`. The default value is <ACL_PRIVATE>.
	 * 	$opt - _array_ (Optional) An associative array of parameters that can have the keys listed in the following section.
	 *
	 * Keys for the $opt parameter:
	 * 	returnCurlHandle - _boolean_ (Optional) A private toggle specifying that the cURL handle be returned rather than actually completing the request. This toggle is useful for manually managed batch requests.
	 *
	 * Returns:
	 * 	_CFResponse_ A <CFResponse> object containing a parsed HTTP response.
	 *
	 * See Also:
	 * 	[REST Access Control Policy](http://docs.amazonwebservices.com/AmazonS3/latest/RESTAccessPolicy.html)
	 */
	public function set_object_acl($bucket, $filename, $acl = self::ACL_PRIVATE, $opt = null)
	{
		// Add this to our request
		if (!$opt) $opt = array();
		$opt['verb'] = 'PUT';
		$opt['resource'] = $filename;

		// Make sure these are defined.
		if (!defined('AWS_CANONICAL_ID') || !defined('AWS_CANONICAL_NAME'))
		{
			// Fetch the data live.
			$canonical = $this->get_canonical_user_id();
			define('AWS_CANONICAL_ID', $canonical['id']);
			define('AWS_CANONICAL_NAME', $canonical['display_name']);
		}

		if (is_array($acl))
		{
			$opt['body'] = $this->generate_access_policy(AWS_CANONICAL_ID, AWS_CANONICAL_NAME, $acl);
		}
		else
		{
			$opt['headers']['x-amz-acl'] = $acl;
		}

		// Authenticate to S3
		return $this->authenticate($bucket, $opt);
	}

	/**
	 * Method: generate_access_policy()
	 * 	Generates the XML to be used for the Access Control Policy.
	 *
	 * Access:
	 * 	public
	 *
	 * Parameters:
	 * 	$canonical_id - _string_ (Required) The canonical ID for the bucket owner. Use the `AWS_CANONICAL_ID` constant or the `id` return value from <get_canonical_user_id()>.
	 * 	$canonical_name - _string_ (Required) The canonical display name for the bucket owner. Use the `AWS_CANONICAL_NAME` constant or the `display_name` value from <get_canonical_user_id()>.
	 * 	$users - _array_ (Optional) An array of associative arrays. Each associative array contains an `id` value and a `permission` value.
	 *
	 * Returns:
	 * 	_string_ Access Control Policy XML.
	 *
	 * See Also:
	 * 	[Access Control Lists](http://docs.amazonwebservices.com/AmazonS3/latest/S3_ACLs.html)
	 */
	public function generate_access_policy($canonical_id, $canonical_name, $users)
	{
		$xml = simplexml_load_string($this->base_acp_xml);
		$owner = $xml->addChild('Owner');
		$owner->addChild('ID', $canonical_id);
		$owner->addChild('DisplayName', $canonical_name);
		$acl = $xml->addChild('AccessControlList');

		foreach ($users as $user)
		{
			$grant = $acl->addChild('Grant');
			$grantee = $grant->addChild('Grantee');

			switch ($user['id'])
			{
				// Authorized Users
				case self::USERS_AUTH:
					$grantee->addAttribute('xsi:type', 'Group', 'http://www.w3.org/2001/XMLSchema-instance');
					$grantee->addChild('URI', self::USERS_AUTH);
					break;

				// All Users
				case self::USERS_ALL:
					$grantee->addAttribute('xsi:type', 'Group', 'http://www.w3.org/2001/XMLSchema-instance');
					$grantee->addChild('URI', self::USERS_ALL);
					break;

				// The Logging User
				case self::USERS_LOGGING:
					$grantee->addAttribute('xsi:type', 'Group', 'http://www.w3.org/2001/XMLSchema-instance');
					$grantee->addChild('URI', self::USERS_LOGGING);
					break;

				// Email Address or Canonical Id
				default:
					if (strpos($user['id'], '@'))
					{
						$grantee->addAttribute('xsi:type', 'AmazonCustomerByEmail', 'http://www.w3.org/2001/XMLSchema-instance');
						$grantee->addChild('EmailAddress', $user['id']);
					}
					else
					{
						// Assume Canonical Id
						$grantee->addAttribute('xsi:type', 'CanonicalUser', 'http://www.w3.org/2001/XMLSchema-instance');
						$grantee->addChild('ID', $user['id']);
					}
					break;
			}

			$grant->addChild('Permission', $user['permission']);
		}

		return $xml->asXML();
	}


	/*%******************************************************************************************%*/
	// LOGGING METHODS

	/**
	 * Method: get_logs()
	 * 	Gets the access logs associated with the specified Amazon S3 bucket.
	 *
	 * Access:
	 * 	public
	 *
	 * Parameters:
	 * 	$bucket - _string_ (Required) The name of the bucket to use. Pass a `null` value when using the <set_vhost()> method.
	 * 	$opt - _array_ (Optional) An associative array of parameters that can have the keys listed in the following section.
	 *
	 * Keys for the $opt parameter:
	 * 	preauth - _integer_|_string_ (Optional) Specifies that a presigned URL for this request should be returned. May be passed as a number of seconds since UNIX Epoch, or any string compatible with `strtotime()`.
	 * 	returnCurlHandle - _boolean_ (Optional) A private toggle specifying that the cURL handle be returned rather than actually completing the request. This toggle is useful for manually managed batch requests.
	 *
	 * Returns:
	 * 	_CFResponse_ A <CFResponse> object containing a parsed HTTP response.
	 *
	 * See Also:
	 * 	[Server Access Logging](http://docs.amazonwebservices.com/AmazonS3/latest/ServerLogs.html)
	 */
	public function get_logs($bucket, $opt = null)
	{
		// Add this to our request
		if (!$opt) $opt = array();
		$opt['verb'] = 'GET';
		$opt['sub_resource'] = 'logging';

		// Authenticate to S3
		return $this->authenticate($bucket, $opt);
	}

	/**
	 * Method: enable_logging()
	 * 	Enables access logging for the specified Amazon S3 bucket.
	 *
	 * Access:
	 * 	public
	 *
	 * Parameters:
	 * 	$bucket - _string_ (Required) The name of the bucket to enable logging for. Pass a `null` value when using the <set_vhost()> method.
	 * 	$target_bucket - _string_ (Required) The name of the bucket to store the logs in.
	 * 	$target_prefix - _string_ (Required) The prefix to give to the log file names.
	 * 	$opt - _array_ (Optional) An associative array of parameters that can have the keys listed in the following section.
	 *
	 * Keys for the $opt parameter:
	 * 	users - _array_ (Optional) An array of associative arrays specifying any user to give access to. Each associative array contains an `id` and `permission` value.
	 * 	returnCurlHandle - _boolean_ (Optional) A private toggle specifying that the cURL handle be returned rather than actually completing the request. This toggle is useful for manually managed batch requests.
	 *
	 * Returns:
	 * 	_CFResponse_ A <CFResponse> object containing a parsed HTTP response.
	 *
	 * See Also:
	 * 	* [Server Access Logging Configuration API](http://docs.amazonwebservices.com/AmazonS3/latest/LoggingAPI.html)
	 */
	public function enable_logging($bucket, $target_bucket, $target_prefix, $opt = null)
	{
		// Add this to our request
		if (!$opt) $opt = array();
		$opt['verb'] = 'PUT';
		$opt['sub_resource'] = 'logging';
		$opt['headers'] = array(
			'Content-Type' => 'application/xml'
		);

		$xml = simplexml_load_string($this->base_logging_xml);
		$LoggingEnabled = $xml->addChild('LoggingEnabled');
		$LoggingEnabled->addChild('TargetBucket', $target_bucket);
		$LoggingEnabled->addChild('TargetPrefix', $target_prefix);
		$TargetGrants = $LoggingEnabled->addChild('TargetGrants');

		if (isset($opt['users']) && is_array($opt['users']))
		{
			foreach ($opt['users'] as $user)
			{
				$grant = $TargetGrants->addChild('Grant');
				$grantee = $grant->addChild('Grantee');

				switch ($user['id'])
				{
					// Authorized Users
					case self::USERS_AUTH:
						$grantee->addAttribute('xsi:type', 'Group', 'http://www.w3.org/2001/XMLSchema-instance');
						$grantee->addChild('URI', self::USERS_AUTH);
						break;

					// All Users
					case self::USERS_ALL:
						$grantee->addAttribute('xsi:type', 'Group', 'http://www.w3.org/2001/XMLSchema-instance');
						$grantee->addChild('URI', self::USERS_ALL);
						break;

					// The Logging User
					case self::USERS_LOGGING:
						$grantee->addAttribute('xsi:type', 'Group', 'http://www.w3.org/2001/XMLSchema-instance');
						$grantee->addChild('URI', self::USERS_LOGGING);
						break;

					// Email Address or Canonical Id
					default:
						if (strpos($user['id'], '@'))
						{
							$grantee->addAttribute('xsi:type', 'AmazonCustomerByEmail', 'http://www.w3.org/2001/XMLSchema-instance');
							$grantee->addChild('EmailAddress', $user['id']);
						}
						else
						{
							// Assume Canonical Id
							$grantee->addAttribute('xsi:type', 'CanonicalUser', 'http://www.w3.org/2001/XMLSchema-instance');
							$grantee->addChild('ID', $user['id']);
						}
						break;
				}

				$grant->addChild('Permission', $user['permission']);
			}
		}

		$opt['body'] = $xml->asXML();

		// Authenticate to S3
		return $this->authenticate($bucket, $opt);
	}

	/**
	 * Method: disable_logging()
	 * 	Disables access logging for the specified Amazon S3 bucket.
	 *
	 * Access:
	 * 	public
	 *
	 * Parameters:
	 * 	$bucket - _string_ (Required) The name of the bucket to use. Pass `null` if using <set_vhost()>.
	 * 	$opt - _array_ (Optional) An associative array of parameters that can have the keys listed in the following section.
	 *
	 * Keys for the $opt parameter:
	 * 	returnCurlHandle - _boolean_ (Optional) A private toggle specifying that the cURL handle be returned rather than actually completing the request. This toggle is useful for manually managed batch requests.
	 *
	 * Returns:
	 * 	_CFResponse_ A <CFResponse> object containing a parsed HTTP response.
	 *
	 * See Also:
	 * 	[Server Access Logging Configuration API](http://docs.amazonwebservices.com/AmazonS3/latest/LoggingAPI.html)
	 */
	public function disable_logging($bucket, $opt = null)
	{
		// Add this to our request
		if (!$opt) $opt = array();
		$opt['verb'] = 'PUT';
		$opt['sub_resource'] = 'logging';
		$opt['headers'] = array(
			'Content-Type' => 'application/xml'
		);
		$opt['body'] = $this->base_logging_xml;

		// Authenticate to S3
		return $this->authenticate($bucket, $opt);
	}


	/*%******************************************************************************************%*/
	// CONVENIENCE METHODS

	/**
	 * Method: if_bucket_exists()
	 * 	Gets whether or not the specified Amazon S3 bucket exists in Amazon S3. This includes buckets
	 * 	that do not belong to the caller.
	 *
	 * Access:
	 * 	public
	 *
	 * Parameters:
	 * 	$bucket - _string_ (Required) The name of the bucket to use.
	 *
	 * Returns:
	 * 	_boolean_ A value of `true` if the bucket exists, or a value of `false` if it does not.
	 */
	public function if_bucket_exists($bucket)
	{
		if ($this->use_batch_flow)
		{
			throw new S3_Exception(__FUNCTION__ . '() cannot be batch requested');
		}

		$header = $this->get_bucket_headers($bucket);
		return (bool) $header->isOK();
	}

	/**
	 * Method: if_object_exists()
	 * 	Gets whether or not the specified Amazon S3 object exists in the specified bucket.
	 *
	 * Access:
	 * 	public
	 *
	 * Parameters:
	 * 	$bucket - _string_ (Required) The name of the bucket to use.
	 * 	$filename - _string_ (Required) The file name for the object.
	 *
	 * Returns:
	 * 	_boolean_ A value of `true` if the object exists, or a value of `false` if it does not.
	 */
	public function if_object_exists($bucket, $filename)
	{
		if ($this->use_batch_flow)
		{
			throw new S3_Exception(__FUNCTION__ . '() cannot be batch requested');
		}

		$header = $this->get_object_headers($bucket, $filename);

		if ($header->isOK()) { return true; }
		elseif ($header->status === 404) { return false; }
		return null;
	}

	/**
	 * Method: if_bucket_policy_exists()
	 * 	Gets whether or not the specified Amazon S3 bucket has a bucket policy associated with it.
	 *
	 * Access:
	 * 	public
	 *
	 * Parameters:
	 * 	$bucket - _string_ (Required) The name of the bucket to use.
	 *
	 * Returns:
	 * 	_boolean_ A value of `true` if a bucket policy exists, or a value of `false` if one does not.
	 */
	public function if_bucket_policy_exists($bucket)
	{
		if ($this->use_batch_flow)
		{
			throw new S3_Exception(__FUNCTION__ . '() cannot be batch requested');
		}

		$response = $this->get_bucket_policy($bucket);

		if ($response->isOK()) { return true; }
		elseif ($response->status === 404) { return false; }
		return null;
	}

	/**
	 * Method: get_bucket_object_count()
	 * 	Gets the number of Amazon S3 objects in the specified bucket.
	 *
	 * Access:
	 * 	public
	 *
	 * Parameters:
	 * 	$bucket - _string_ (Required) The name of the bucket to use.
	 *
	 * Returns:
	 * 	_integer_ The number of Amazon S3 objects in the bucket.
	 */
	public function get_bucket_object_count($bucket)
	{
		if ($this->use_batch_flow)
		{
			throw new S3_Exception(__FUNCTION__ . '() cannot be batch requested');
		}

		return count($this->get_object_list($bucket));
	}

	/**
	 * Method: get_bucket_filesize()
	 * 	Gets the cumulative file size of the contents of the Amazon S3 bucket.
	 *
	 * Access:
	 * 	public
	 *
	 * Parameters:
	 * 	$bucket - _string_ (Required) The name of the bucket to use.
	 * 	$friendly_format - _boolean_ (Optional) A value of `true` will format the return value to 2 decimal points using the largest possible unit (i.e., 3.42 GB). A value of `false` will format the return value as the raw number of bytes.
	 *
	 * Returns:
	 * 	_integer_|_string_ The number of bytes as an integer, or the friendly format as a string.
	 */
	public function get_bucket_filesize($bucket, $friendly_format = false)
	{
		if ($this->use_batch_flow)
		{
			throw new S3_Exception(__FUNCTION__ . '() cannot be batch requested');
		}

		$filesize = 0;
		$list = $this->list_objects($bucket);

		foreach ($list->body->Contents as $filename)
		{
			$filesize += (int) $filename->Size;
		}

		if ($friendly_format)
		{
			$filesize = $this->util->size_readable($filesize);
		}

		return $filesize;
	}

	/**
	 * Method: get_object_filesize()
	 * 	Gets the file size of the specified Amazon S3 object.
	 *
	 * Access:
	 * 	public
	 *
	 * Parameters:
	 * 	$bucket - _string_ (Required) The name of the bucket to use.
	 * 	$filename - _string_ (Required) The file name for the object.
	 * 	$friendly_format - _boolean_ (Optional) A value of `true` will format the return value to 2 decimal points using the largest possible unit (i.e., 3.42 GB). A value of `false` will format the return value as the raw number of bytes.
	 *
	 * Returns:
	 * 	_integer_|_string_ The number of bytes as an integer, or the friendly format as a string.
	 */
	public function get_object_filesize($bucket, $filename, $friendly_format = false)
	{
		if ($this->use_batch_flow)
		{
			throw new S3_Exception(__FUNCTION__ . '() cannot be batch requested');
		}

		$object = $this->get_object_headers($bucket, $filename);
		$filesize = (integer) $object->header['content-length'];

		if ($friendly_format)
		{
			$filesize = $this->util->size_readable($filesize);
		}

		return $filesize;
	}

	/**
	 * Method: change_content_type()
	 * 	Changes the content type for an existing Amazon S3 object.
	 *
	 * Access:
	 * 	public
	 *
	 * Parameters:
	 * 	$bucket - _string_ (Required) The name of the bucket to use.
	 * 	$filename - _string_ (Required) The file name for the object.
	 * 	$contentType - _string_ (Required) The content-type to apply to the object.
	 * 	$opt - _array_ (Optional) An associative array of parameters that can have the keys listed in the following section.
	 *
	 * Keys for the $opt parameter:
	 * 	returnCurlHandle - _boolean_ (Optional) A private toggle specifying that the cURL handle be returned rather than actually completing the request. This toggle is useful for manually managed batch requests.
	 *
	 * Returns:
	 * 	_CFResponse_ A <CFResponse> object containing a parsed HTTP response.
	 */
	public function change_content_type($bucket, $filename, $contentType, $opt = null)
	{
		if (!$opt) $opt = array();

		// Merge optional parameters
		$opt = array_merge(array(
			'headers' => array(
				'Content-Type' => $contentType
			),
			'metadataDirective' => 'REPLACE'
		), $opt);

		return $this->copy_object(
			array('bucket' => $bucket, 'filename' => $filename),
			array('bucket' => $bucket, 'filename' => $filename),
			$opt
		);
	}

	/**
	 * Method: change_storage_redundancy()
	 * 	Changes the storage redundancy for an existing object.
	 *
	 * Access:
	 * 	public
	 *
	 * Parameters:
	 * 	$bucket - _string_ (Required) The name of the bucket to use.
	 * 	$filename - _string_ (Required) The file name for the object.
	 * 	$storage - _string_ (Required) The storage setting to apply to the object. Accepts either of the following constants: <STORAGE_STANDARD> or <STORAGE_REDUCED>.
	 * 	$opt - _array_ (Optional) An associative array of parameters that can have the keys listed in the following section.
	 *
	 * Keys for the $opt parameter:
	 * 	returnCurlHandle - _boolean_ (Optional) A private toggle specifying that the cURL handle be returned rather than actually completing the request. This toggle is useful for manually managed batch requests.
	 *
	 * Returns:
	 * 	_CFResponse_ A <CFResponse> object containing a parsed HTTP response.
	 */
	public function change_storage_redundancy($bucket, $filename, $storage, $opt = null)
	{
		if (!$opt) $opt = array();

		// Merge optional parameters
		$opt = array_merge(array(
			'storage' => $storage,
			'metadataDirective' => 'COPY',
		), $opt);

		return $this->copy_object(
			array('bucket' => $bucket, 'filename' => $filename),
			array('bucket' => $bucket, 'filename' => $filename),
			$opt
		);
	}

	/**
	 * Method: get_bucket_list()
	 * 	Gets a simplified list of bucket names on an Amazon S3 account.
	 *
	 * Access:
	 * 	public
	 *
	 * Parameters:
	 * 	$pcre - _string_ (Optional) A Perl-Compatible Regular Expression (PCRE) to filter the bucket names against.
	 *
	 * Returns:
	 * 	_array_ The list of matching bucket names. If there are no results, the method will return an empty array.
	 *
	 * See Also:
	 * 	[Regular Expressions (Perl-Compatible)](http://php.net/pcre)
	 */
	public function get_bucket_list($pcre = null)
	{
		if ($this->use_batch_flow)
		{
			throw new S3_Exception(__FUNCTION__ . '() cannot be batch requested');
		}

		// Get a list of buckets.
		$list = $this->list_buckets();
		if ($list = $list->body->Name())
		{
			$list = $list->map_string($pcre);
			return $list;
		}

		return array();
>>>>>>> f89d276c08923c32850e8d991a1f67c0cc2e13cb
	}

	/**
	 * Method: get_object_list()
<<<<<<< HEAD
	 * 	ONLY lists the object filenames from a bucket.
	 *
	 * Access:
	 * 	public
 	 *
	 * Parameters:
	 * 	bucket - _string_ (Required) The name of the bucket to be used.
	 * 	opt - _array_ (Required) Associative array of parameters which can have the following keys:
	 *
	 * Keys for the $opt parameter:
	 * 	prefix - _string_ (Optional) Restricts the response to only contain results that begin with the specified prefix.
	 * 	marker - _string_ (Optional) It restricts the response to only contain results that occur alphabetically after the value of marker.
	 * 	maxKeys - _string_ (Optional) Limits the number of results returned in response to your query. Will return no more than this number of results, but possibly less.
	 * 	delimiter - _string_ (Optional) Unicode string parameter. Keys that contain the same string between the prefix and the first occurrence of the delimiter will be rolled up into a single result element in the CommonPrefixes collection.
	 * 	pcre - _string_ (Optional) A Perl-Compatible Regular Expression (PCRE) to filter the names against. This is applied AFTER any native S3 filtering from 'prefix', 'marker', 'maxKeys', or 'delimiter'.
	 * 	returnCurlHandle - _boolean_ (Optional) A private toggle that will return the CURL handle for the request rather than actually completing the request. This is useful for MultiCURL requests.
	 *
	 * Returns:
	 * 	_array_ The list of matching object names.
 	 *
	 * See Also:
	 * 	AWS Method - http://docs.amazonwebservices.com/AmazonS3/latest/ListingKeysRequest.html
	 * 	List Keys - http://docs.amazonwebservices.com/AmazonS3/latest/gsg/ListKeys.html
	 * 	Related - <get_bucket_list()>, <list_objects()>
	 */
	public function get_object_list($bucket, $opt = null)
	{
		// Set some default values
		$filenames = array();
		$pcre = null;

		// Get a list of files.
		$list = $this->list_objects($bucket, $opt);

		// Extract the options
		if ($opt)
		{
			extract($opt);
		}

		// If we have a PCRE regex, store it.
		if ($pcre)
		{
			if (isset($list))
			{
				// Loop through and find the filenames.
				foreach ($list->body->Contents as $file)
				{
					$file = (string) $file->Key;

					if (preg_match($pcre, $file))
					{
						$filenames[] = $file;
					}
				}
			}
		}
		else
		{
			if (isset($list))
			{
				// Loop through and find the filenames.
				foreach ($list->body->Contents as $file)
				{
					$filenames[] = (string) $file->Key;
				}
			}
		}

		return (count($filenames) > 0) ? $filenames : null;
	}

	/**
	 * Method: copy_object()
	 * 	Copies an object to a new location, whether in the same locale/bucket or otherwise.
	 *
	 * Access:
	 * 	public
 	 *
	 * Parameters:
	 * 	source_bucket - _string_ (Required) The name of the bucket that contains the source file.
	 * 	source_filename - _string_ (Required) The source filename that you want to copy.
	 * 	dest_bucket - _string_ (Required) The name of the bucket that you want to copy the file to.
	 * 	dest_filename - _string_ (Required) The filename that you want to give to the copy.
	 * 	opt - _array_ (Required) Associative array of parameters which can have the following keys:
	 *
	 * Keys for the $opt parameter:
	 * 	acl - _string_ (Optional) One of the following options: <S3_ACL_PRIVATE>, <S3_ACL_PUBLIC>, <S3_ACL_OPEN>, or <S3_ACL_AUTH_READ>. Defaults to <S3_ACL_PRIVATE>.
	 * 	headers - _array_ (Optional) Standard HTTP headers to send along in the request.
	 * 	meta - _array_ (Optional) Associative array of key-value pairs. Represented by x-amz-meta-: Any header starting with this prefix is considered user metadata. It will be stored with the object and returned when you retrieve the object. The total size of the HTTP request, not including the body, must be less than 4 KB.
	 * 	metadataDirective - _string_ (Optional) Accepts either COPY or REPLACE. You will likely never need to use this, as it manages itself with no issues.
	 * 	returnCurlHandle - _boolean_ (Optional) A private toggle that will return the CURL handle for the request rather than actually completing the request. This is useful for MultiCURL requests.
	 *
	 * Returns:
	 * 	<ResponseCore> object
 	 *
	 * See Also:
	 * 	AWS Method - http://docs.amazonwebservices.com/AmazonS3/latest/RESTObjectCOPY.html
	 * 	Using and Copying Objects - http://docs.amazonwebservices.com/AmazonS3/latest/UsingCopyingObjects.html
	 * 	PUT Request Headers - http://docs.amazonwebservices.com/AmazonS3/latest/RESTObjectPUT.html#RESTObjectPUTRequestHeaders
	 * 	Related - <copy_bucket()>, <duplicate_object()>, <move_object()>, <rename_object()>
	 */
	public function copy_object($source_bucket, $source_filename, $dest_bucket, $dest_filename, $opt = null)
	{
		if (!$opt) $opt = array();

		// Add this to our request
		$opt['verb'] = HTTP_PUT;
		$opt['method'] = 'copy_object';
		$opt['sourceBucket'] = $source_bucket;
		$opt['sourceObject'] = $source_filename;
		$opt['destinationBucket'] = $dest_bucket;
		$opt['destinationObject'] = $dest_filename;
		$opt['filename'] = $dest_filename;
		$opt['metadataDirective'] = isset($opt['metadataDirective']) ? $opt['metadataDirective'] : 'COPY';

		// Do we have metadata?
		if (isset($opt['meta']) && is_array($opt['meta']))
		{
			$opt['metadataDirective'] = 'REPLACE';
		}

		// Authenticate to S3
		return $this->authenticate($dest_bucket, $opt);
	}

	/**
	 * Method: update_object()
	 * 	Updates an existing object with new content or settings.
	 *
	 * Access:
	 * 	public
 	 *
	 * Parameters:
	 * 	bucket - _string_ (Required) The name of the bucket that contains the source file.
	 * 	filename - _string_ (Required) The source filename that you want to update.
	 * 	opt - _array_ (Required) Associative array of parameters which can have the following keys:
	 *
	 * Keys for the $opt parameter:
	 * 	acl - _string_ (Optional) One of the following options: <S3_ACL_PRIVATE>, <S3_ACL_PUBLIC>, <S3_ACL_OPEN>, or <S3_ACL_AUTH_READ>. Defaults to <S3_ACL_PRIVATE>.
	 * 	headers - _array_ (Optional) Standard HTTP headers to send along in the request.
	 * 	meta - _array_ (Optional) Associative array of key-value pairs. Represented by x-amz-meta-: Any header starting with this prefix is considered user metadata. It will be stored with the object and returned when you retrieve the object. The total size of the HTTP request, not including the body, must be less than 4 KB.
	 * 	metadataDirective - _string_ (Optional) Accepts either COPY or REPLACE. You will likely never need to use this, as it manages itself with no issues.
	 * 	returnCurlHandle - _boolean_ (Optional) A private toggle that will return the CURL handle for the request rather than actually completing the request. This is useful for MultiCURL requests.
	 *
	 * Returns:
	 * 	<ResponseCore> object
 	 *
	 * See Also:
	 * 	AWS Method - http://docs.amazonwebservices.com/AmazonS3/latest/RESTObjectCOPY.html
	 * 	Using and Copying Objects - http://docs.amazonwebservices.com/AmazonS3/latest/UsingCopyingObjects.html
	 * 	PUT Request Headers - http://docs.amazonwebservices.com/AmazonS3/latest/RESTObjectPUT.html#RESTObjectPUTRequestHeaders
	 * 	Related - <copy_bucket()>, <duplicate_object()>, <move_object()>, <rename_object()>
	 */
	public function update_object($bucket, $filename, $opt)
	{
		if (!$opt) $opt = array();

		// Add this to our request
		$opt['verb'] = HTTP_PUT;
		$opt['method'] = 'update_object';
		$opt['sourceBucket'] = $bucket;
		$opt['sourceObject'] = $filename;
		$opt['destinationBucket'] = $bucket;
		$opt['destinationObject'] = $filename;
		$opt['filename'] = $filename;
		$opt['metadataDirective'] = 'REPLACE';

		// Authenticate to S3
		return $this->authenticate($bucket, $opt);
	}

	/**
	 * Method: duplicate_object()
	 * 	Identical to <copy_object()>, except that it only copies within a single bucket.
	 *
	 * Access:
	 * 	public
 	 *
	 * Parameters:
	 * 	bucket - _string_ (Required) The name of the bucket that contains the file.
	 * 	source_filename - _string_ (Required) The source filename that you want to copy.
	 * 	dest_filename - _string_ (Required) The filename that you want to give to the copy.
	 * 	acl - _string_ (Optional) One of the following options: <S3_ACL_PRIVATE>, <S3_ACL_PUBLIC>, <S3_ACL_OPEN>, or <S3_ACL_AUTH_READ>. Defaults to <S3_ACL_PRIVATE>.
	 *
	 * Returns:
	 * 	<ResponseCore> object
 	 *
	 * See Also:
	 * 	Related - <copy_object()>, <move_object()>, <rename_object()>
	 */
	public function duplicate_object($bucket, $source_filename, $dest_filename, $acl = S3_ACL_PRIVATE)
	{
		return $this->copy_object($bucket, $source_filename, $bucket, $dest_filename, array('acl' => $acl));
	}

	/**
	 * Method: move_object()
	 * 	Moves an object to a new location, whether in the same locale/bucket or otherwise.
	 *
	 * Access:
	 * 	public
 	 *
	 * Parameters:
	 * 	source_bucket - _string_ (Required) The name of the bucket that contains the source file.
	 * 	source_filename - _string_ (Required) The source filename that you want to copy.
	 * 	dest_bucket - _string_ (Required) The name of the bucket that you want to copy the file to.
	 * 	dest_filename - _string_ (Required) The filename that you want to give to the copy.
	 * 	acl - _string_ (Optional) One of the following options: <S3_ACL_PRIVATE>, <S3_ACL_PUBLIC>, <S3_ACL_OPEN>, or <S3_ACL_AUTH_READ>. Defaults to <S3_ACL_PRIVATE>.
	 *
	 * Returns:
	 * 	_array_ <ResponseCore> objects for the copy and the delete.
 	 *
	 * See Also:
	 * 	Related - <copy_object()>, <duplicate_object()>, <rename_object()>
	 */
	public function move_object($source_bucket, $source_filename, $dest_bucket, $dest_filename, $acl = S3_ACL_PRIVATE)
	{
		$return = array();
		$return['copy'] = $this->copy_object($source_bucket, $source_filename, $dest_bucket, $dest_filename, array('acl' => $acl));
		$return['delete'] = $this->delete_object($source_bucket, $source_filename);
		return $return;
	}

	/**
	 * Method: rename_object()
	 * 	Identical to <move_object()>, except that it only moves within a single bucket.
	 *
	 * Access:
	 * 	public
 	 *
	 * Parameters:
	 * 	bucket - _string_ (Required) The name of the bucket that contains the file.
	 * 	source_filename - _string_ (Required) The source filename that you want to copy.
	 * 	dest_filename - _string_ (Required) The filename that you want to give to the copy.
	 * 	acl - _string_ (Optional) One of the following options: <S3_ACL_PRIVATE>, <S3_ACL_PUBLIC>, <S3_ACL_OPEN>, or <S3_ACL_AUTH_READ>. Defaults to <S3_ACL_PRIVATE>.
	 *
	 * Returns:
	 * 	<ResponseCore> object
 	 *
	 * See Also:
	 * 	Related - <copy_object()>, <duplicate_object()>, <move_object()>
	 */
	public function rename_object($bucket, $source_filename, $dest_filename, $acl = S3_ACL_PRIVATE)
	{
		return $this->move_object($bucket, $source_filename, $bucket, $dest_filename, $acl);
	}

	/**
	 * Method: get_object_acl()
	 * 	Gets the ACL settings for a object.
	 *
	 * Access:
	 * 	public
 	 *
	 * Parameters:
	 * 	bucket - _string_ (Required) The name of the bucket to be used.
	 * 	filename - _string_ (Required) The filename for the object.
	 * 	returnCurlHandle - _boolean_ (Optional) A private toggle that will return the CURL handle for the request rather than actually completing the request. This is useful for MultiCURL requests.
	 *
	 * Returns:
	 * 	<ResponseCore> object
 	 *
	 * See Also:
	 * 	AWS Method - http://docs.amazonwebservices.com/AmazonS3/latest/RESTAccessPolicy.html
	 * 	Related - <set_object_acl()>, <set_bucket_acl()>, <get_bucket_acl()>
	 */
	public function get_object_acl($bucket, $filename, $returnCurlHandle = null)
	{
		// Add this to our request
		$opt = array();
		$opt['verb'] = HTTP_GET;
		$opt['method'] = 'get_object_acl';
		$opt['filename'] = $filename;
		$opt['returnCurlHandle'] = $returnCurlHandle;
=======
	 * 	Gets a simplified list of Amazon S3 object file names contained in a bucket.
	 *
	 * Access:
	 * 	public
	 *
	 * Parameters:
	 * 	$bucket - _string_ (Required) The name of the bucket to use.
	 * 	$opt - _array_ (Optional) An associative array of parameters that can have the keys listed in the following section.
	 *
	 * Keys for the $opt parameter:
	 * 	delimiter - _string_ (Optional) Keys that contain the same string between the prefix and the first occurrence of the delimiter will be rolled up into a single result element in the CommonPrefixes collection.
	 * 	marker - _string_ (Optional) Restricts the response to contain results that occur only alphabetically after the value of the marker.
	 * 	max-keys - _string_ (Optional) The maximum number of results returned by the method call. The returned list will contain no more results than the specified value, but may return less.
	 * 	pcre - _string_ (Optional) A Perl-Compatible Regular Expression (PCRE) to filter the names against. This is applied only AFTER any native Amazon S3 filtering from specified `prefix`, `marker`, `max-keys`, or `delimiter` values are applied.
	 * 	preauth - _integer_|_string_ (Optional) Specifies that a presigned URL for this request should be returned. May be passed as a number of seconds since UNIX Epoch, or any string compatible with `strtotime()`.
	 * 	prefix - _string_ (Optional) Restricts the response to contain results that begin only with the specified prefix.
	 * 	returnCurlHandle - _boolean_ (Optional) A private toggle specifying that the cURL handle be returned rather than actually completing the request. This toggle is useful for manually managed batch requests.
	 *
	 * Returns:
	 * 	_array_ The list of matching object names. If there are no results, the method will return an empty array.
	 *
	 * See Also:
	 * 	[Regular Expressions (Perl-Compatible)](http://php.net/pcre)
	 */
	public function get_object_list($bucket, $opt = null)
	{
		if ($this->use_batch_flow)
		{
			throw new S3_Exception(__FUNCTION__ . '() cannot be batch requested');
		}

		// Set some default values
		$pcre = isset($opt['pcre']) ? $opt['pcre'] : null;

		// Get a list of files.
		$list = $this->list_objects($bucket, $opt);
		if ($list = $list->body->Key())
		{
			$list = $list->map_string($pcre);
			return $list;
		}

		return array();
	}

	/**
	 * Method: delete_all_objects()
	 * 	Deletes all Amazon S3 objects inside the specified bucket.
	 *
	 * Access:
	 * 	public
	 *
	 * Parameters:
	 * 	$bucket - _string_ (Required) The name of the bucket to use.
	 * 	$pcre - _string_ (Optional) A Perl-Compatible Regular Expression (PCRE) to filter the names against. The default value is <PCRE_ALL>.
	 *
	 * Returns:
	 * 	_boolean_ A value of `true` means that all objects were successfully deleted. A value of `false` means that at least one object failed to delete.
	 *
	 * See Also:
	 * 	[Regular Expressions (Perl-Compatible)](http://php.net/pcre)
	 */
	public function delete_all_objects($bucket, $pcre = self::PCRE_ALL)
	{
		if ($this->use_batch_flow)
		{
			throw new S3_Exception(__FUNCTION__ . '() cannot be batch requested');
		}

		// Collect all matches
		$list = $this->get_object_list($bucket, array('pcre' => $pcre));

		// As long as we have at least one match...
		if (count($list) > 0)
		{
			// Create new batch request object
			$q = new $this->batch_class();

			// Go through all of the items and delete them.
			foreach ($list as $item)
			{
				$this->batch($q)->delete_object($bucket, $item);
			}

			return $this->batch($q)->send()->areOK();
		}

		// If there are no matches, return true
		return true;
	}

	/**
	 * Method: delete_all_object_versions()
	 * 	Deletes all of the versions of all Amazon S3 objects inside the specified bucket.
	 *
	 * Access:
	 * 	public
	 *
	 * Parameters:
	 * 	$bucket - _string_ (Required) The name of the bucket to use.
	 * 	$pcre - _string_ (Optional) A Perl-Compatible Regular Expression (PCRE) to filter the names against. The default value is <PCRE_ALL>.
	 *
	 * Returns:
	 * 	_boolean_ A value of `true` means that all object versions were successfully deleted. A value of `false` means that at least one object/version failed to delete.
	 *
	 * See Also:
	 * 	[Regular Expressions (Perl-Compatible)](http://php.net/pcre)
	 */
	public function delete_all_object_versions($bucket, $pcre = null)
	{
		if ($this->use_batch_flow)
		{
			throw new S3_Exception(__FUNCTION__ . '() cannot be batch requested');
		}

		// Instantiate
		$q = new CFBatchRequest(200);
		$response = $this->list_bucket_object_versions($bucket);

		// Gather all nodes together into a single array
		if ($response->body->DeleteMarker() && $response->body->Version())
		{
			$markers = array_merge($response->body->DeleteMarker()->getArrayCopy(), $response->body->Version()->getArrayCopy());
		}
		elseif ($response->body->DeleteMarker())
		{
			$markers = $response->body->DeleteMarker()->getArrayCopy();
		}
		elseif ($response->body->Version())
		{
			$markers = $response->body->Version()->getArrayCopy();
		}
		else
		{
			$markers = array();
		}

		// Loop through markers
		foreach ($markers as $marker)
		{
			if ($pcre)
			{
				if (preg_match($pcre, (string) $marker->Key))
				{
					$this->batch($q)->delete_object($bucket, (string) $marker->Key, array(
						'versionId' => (string) $marker->VersionId
					));
				}
			}
			else
			{
				$this->batch($q)->delete_object($bucket, (string) $marker->Key, array(
					'versionId' => (string) $marker->VersionId
				));
			}
		}

		return $this->batch($q)->send();
	}


	/*%******************************************************************************************%*/
	// URLS

	/**
	 * Method: get_object_url()
	 * 	Gets the web-accessible URL for the Amazon S3 object or generates a time-limited signed request for
	 * 	a private file.
	 *
	 * Access:
	 * 	public
	 *
	 * Parameters:
	 * 	$bucket - _string_ (Required) The name of the bucket to use.
	 * 	$filename - _string_ (Required) The file name for the Amazon S3 object.
	 * 	$preauth - _integer_|_string_ (Optional) Specifies that a presigned URL for this request should be returned. May be passed as a number of seconds since UNIX Epoch, or any string compatible with `strtotime()`.
	 * 	$opt - _array_ (Optional) An associative array of parameters that can have the keys listed in the following section.
	 *
	 * Keys for the $opt parameter:
	 * 	method - _string_ (Optional) The HTTP method to use for the request. Defaults to a value of `GET`.
	 * 	torrent - _boolean_ (Optional) A value of `true` will return a URL to a torrent of the Amazon S3 object. A value of `false` will return a non-torrent URL. Defaults to `false`.
	 * 	returnCurlHandle - _boolean_ (Optional) A private toggle specifying that the cURL handle be returned rather than actually completing the request. This toggle is useful for manually managed batch requests.
	 *
	 * Returns:
	 * 	_string_ The file URL, with authentication and/or torrent parameters if requested.
	 *
	 * See Also:
	 * 	[Using Query String Authentication](http://docs.amazonwebservices.com/AmazonS3/latest/S3_QSAuth.html)
	 */
	public function get_object_url($bucket, $filename, $preauth = 0, $opt = null)
	{
		// Add this to our request
		if (!$opt) $opt = array();
		$opt['verb'] = isset($opt['method']) ? $opt['method'] : 'GET';
		$opt['resource'] = $filename;
		$opt['preauth'] = $preauth;

		if (isset($opt['torrent']) && $opt['torrent'])
		{
			$opt['sub_resource'] = 'torrent';
			unset($opt['torrent']);
		}

		// Authenticate to S3
		$current_ssl_setting = $this->use_ssl;
		$this->use_ssl = false;
		$response = $this->authenticate($bucket, $opt);
		$this->use_ssl = $current_ssl_setting;

		return $response;
	}

	/**
	 * Method: get_torrent_url()
	 * 	Gets the web-accessible URL to a torrent of the Amazon S3 object. The Amazon S3 object's access
	 * 	control list settings (ACL) MUST be set to <ACL_PUBLIC> for a valid URL to be returned.
	 *
	 * Access:
	 * 	public
	 *
	 * Parameters:
	 * 	$bucket - _string_ (Required) The name of the bucket to use.
	 * 	$filename - _string_ (Required) The file name for the object.
	 * 	$preauth - _integer_|_string_ (Optional) Specifies that a presigned URL for this request should be returned. May be passed as a number of seconds since UNIX Epoch, or any string compatible with `strtotime()`.
	 *
	 * Returns:
	 * 	_string_ The torrent URL, with authentication parameters if requested.
	 *
	 * See Also:
	 * 	[Using BitTorrent to Retrieve Objects Stored in Amazon S3](http://docs.amazonwebservices.com/AmazonS3/latest/index.html?S3TorrentRetrieve.html)
	 */
	public function get_torrent_url($bucket, $filename, $preauth = 0)
	{
		return $this->get_object_url($bucket, $filename, $preauth, array(
			'torrent' => true
		));
	}


	/*%******************************************************************************************%*/
	// VERSIONING

	/**
	 * Method: enable_versioning()
	 * 	Enables versioning support for the specified Amazon S3 bucket.
	 *
	 * Access:
	 * 	public
	 *
	 * Parameters:
	 * 	$bucket - _string_ (Required) The name of the bucket to use.
	 * 	$opt - _array_ (Optional) An associative array of parameters that can have the keys listed in the following section.
	 *
	 * Keys for the $opt parameter:
	 * 	MFASerial - _string_ (Optional) The serial number on the back of the Gemalto device. `MFASerial`, `MFAToken` and `MFAStatus` must all be set for MFA to work.
	 * 	MFAToken - _string_ (Optional) The current token displayed on the Gemalto device. `MFASerial`, `MFAToken` and `MFAStatus` must all be set for MFA to work.
	 * 	MFAStatus - _string_ (Optional) The MFA Delete status. Can be `Enabled` or `Disabled`. `MFASerial`, `MFAToken` and `MFAStatus` must all be set for MFA to work.
	 * 	returnCurlHandle - _boolean_ (Optional) A private toggle specifying that the cURL handle be returned rather than actually completing the request. This toggle is useful for manually managed batch requests.
	 *
	 * Returns:
	 * 	_CFResponse_ A <CFResponse> object containing a parsed HTTP response.
	 *
	 * See Also:
	 * 	* [Multi-Factor Authentication](http://aws.amazon.com/mfa/)
	 */
	public function enable_versioning($bucket, $opt = null)
	{
		if (!$opt) $opt = array();

		// Add this to our request
		$opt['verb'] = 'PUT';
		$opt['sub_resource'] = 'versioning';

		$xml = simplexml_load_string($this->base_versioning_xml);
		$xml->addChild('Status', 'Enabled');

		// Enable MFA delete?
		if (isset($opt['MFASerial']) && isset($opt['MFAToken']) && isset($opt['MFAStatus']))
		{
			$xml->addChild('MfaDelete', $opt['MFAStatus']);

			$opt['headers'] = array(
				'x-amz-mfa' => ($opt['MFASerial'] . ' ' . $opt['MFAToken'])
			);
		}

		$opt['body'] = $xml->asXML();
>>>>>>> f89d276c08923c32850e8d991a1f67c0cc2e13cb

		// Authenticate to S3
		return $this->authenticate($bucket, $opt);
	}

	/**
<<<<<<< HEAD
	 * Method: set_object_acl()
	 * 	Sets the ACL settings for a object.
	 *
	 * Access:
	 * 	public
 	 *
	 * Parameters:
	 * 	bucket - _string_ (Required) The name of the bucket to be used.
	 * 	filename - _string_ (Required) The filename for the object.
	 * 	acl - _string_ (Optional) One of the following options: <S3_ACL_PRIVATE>, <S3_ACL_PUBLIC>, <S3_ACL_OPEN>, or <S3_ACL_AUTH_READ>. Alternatively, an array of associative arrays. Each associative array contains an 'id' and a 'permission'. Defaults to <S3_ACL_PRIVATE>.
	 * 	returnCurlHandle - _boolean_ (Optional) A private toggle that will return the CURL handle for the request rather than actually completing the request. This is useful for MultiCURL requests.
	 *
	 * Returns:
	 * 	<ResponseCore> object
	 *
	 * See Also:
	 * 	AWS Method - http://docs.amazonwebservices.com/AmazonS3/latest/RESTAccessPolicy.html
	 * 	Related - <set_bucket_acl()>, <get_bucket_acl()>, <get_object_acl()>
	 */
	public function set_object_acl($bucket, $filename, $acl = S3_ACL_PRIVATE, $returnCurlHandle = null)
	{
		// Add this to our request
		$opt = array();
		$opt['verb'] = HTTP_PUT;
		$opt['method'] = 'set_object_acl';
		$opt['filename'] = $filename;
		$opt['returnCurlHandle'] = $returnCurlHandle;

		// Make sure these are defined.
		if (!defined('AWS_CANONICAL_ID') || !defined('AWS_CANONICAL_NAME'))
		{
			// Fetch the data live.
			$canonical = $this->get_canonical_user_id();
			define('AWS_CANONICAL_ID', $canonical['id']);
			define('AWS_CANONICAL_NAME', $canonical['display_name']);

			// Issue a notice.
			trigger_error('One or both of the configuration settings AWS_CANONICAL_ID and AWS_CANONICAL_NAME have NOT been set in config.inc.php. ' . CLOUDFUSION_NAME . ' must make additional requests to fetch the data, resulting in slower performance for ' . __FUNCTION__ . '(). For best performance, be sure to define these values in your config.inc.php file. For more details, see http://tarzan-aws.googlecode.com/svn/tags/' . CLOUDFUSION_VERSION . '/config-sample.inc.php', E_USER_NOTICE);
		}

		if (is_array($acl))
		{
			$opt['body'] = $this->generate_access_policy(AWS_CANONICAL_ID, AWS_CANONICAL_NAME, $acl);
		}
		else
		{
			$opt['acl'] = $acl;
		}
=======
	 * Method: disable_versioning()
	 * 	Disables versioning support for the specified Amazon S3 bucket.
	 *
	 * Access:
	 * 	public
	 *
	 * Parameters:
	 * 	$bucket - _string_ (Required) The name of the bucket to use.
	 * 	$opt - _array_ (Optional) An associative array of parameters that can have the keys listed in the following section.
	 *
	 * Keys for the $opt parameter:
	 * 	MFASerial - _string_ (Optional) The serial number on the back of the Gemalto device. `MFASerial`, `MFAToken` and `MFAStatus` must all be set for MFA to work.
	 * 	MFAToken - _string_ (Optional) The current token displayed on the Gemalto device. `MFASerial`, `MFAToken` and `MFAStatus` must all be set for MFA to work.
	 * 	MFAStatus - _string_ (Optional) The MFA Delete status. Can be `Enabled` or `Disabled`. `MFASerial`, `MFAToken` and `MFAStatus` must all be set for MFA to work.
	 * 	returnCurlHandle - _boolean_ (Optional) A private toggle specifying that the cURL handle be returned rather than actually completing the request. This toggle is useful for manually managed batch requests.
	 *
	 * Returns:
	 * 	_CFResponse_ A <CFResponse> object containing a parsed HTTP response.
	 *
	 * See Also:
	 * 	* [Multi-Factor Authentication](http://aws.amazon.com/mfa/)
	 */
	public function disable_versioning($bucket, $opt = null)
	{
		if (!$opt) $opt = array();

		// Add this to our request
		$opt['verb'] = 'PUT';
		$opt['sub_resource'] = 'versioning';

		$xml = simplexml_load_string($this->base_versioning_xml);
		$xml->addChild('Status', 'Suspended');

		// Enable MFA delete?
		if (isset($opt['MFASerial']) && isset($opt['MFAToken']) && isset($opt['MFAStatus']))
		{
			$xml->addChild('MfaDelete', $opt['MFAStatus']);

			$opt['headers'] = array(
				'x-amz-mfa' => ($opt['MFASerial'] . ' ' . $opt['MFAToken'])
			);
		}

		$opt['body'] = $xml->asXML();
>>>>>>> f89d276c08923c32850e8d991a1f67c0cc2e13cb

		// Authenticate to S3
		return $this->authenticate($bucket, $opt);
	}

<<<<<<< HEAD

	/*%******************************************************************************************%*/
	// LOGGING METHODS

	/**
	 * Method: get_logs()
	 * 	Get the access logs associated with a given bucket.
	 *
	 * Access:
	 * 	public
 	 *
	 * Parameters:
	 * 	bucket - _string_ (Required) The name of the bucket to be used. Pass null if using <set_vhost()>.
	 *
	 * Returns:
	 * 	<ResponseCore> object
	 *
	 * See Also:
	 * 	AWS Method - http://docs.amazonwebservices.com/AmazonS3/latest/ServerLogs.html
	 * 	Related - <get_logs()>, <enable_logging()>, <disable_logging()>
	 */
	public function get_logs($bucket)
	{
		// Add this to our request
		$opt = array();
		$opt['verb'] = HTTP_GET;
		$opt['method'] = 'get_logs';
=======
	/**
	 * Method: get_versioning_status()
	 * 	Gets an Amazon S3 bucket's versioning status.
	 *
	 * Access:
	 * 	public
	 *
	 * Parameters:
	 * 	$bucket - _string_ (Required) The name of the bucket to use.
	 * 	$opt - _array_ (Optional) An associative array of parameters that can have the keys listed in the following section.
	 *
	 * Keys for the $opt parameter:
	 * 	preauth - _integer_|_string_ (Optional) Specifies that a presigned URL for this request should be returned. May be passed as a number of seconds since UNIX Epoch, or any string compatible with `strtotime()`.
	 * 	returnCurlHandle - _boolean_ (Optional) A private toggle specifying that the cURL handle be returned rather than actually completing the request. This toggle is useful for manually managed batch requests.
	 *
	 * Returns:
	 * 	_CFResponse_ A <CFResponse> object containing a parsed HTTP response.
	 */
	public function get_versioning_status($bucket, $opt = null)
	{
		if (!$opt) $opt = array();
		$opt['verb'] = 'GET';
		$opt['sub_resource'] = 'versioning';
>>>>>>> f89d276c08923c32850e8d991a1f67c0cc2e13cb

		// Authenticate to S3
		return $this->authenticate($bucket, $opt);
	}

	/**
<<<<<<< HEAD
	 * Method: enable_logging()
	 * 	Enable access logging.
	 *
	 * Access:
	 * 	public
 	 *
	 * Parameters:
	 * 	bucket - _string_ (Required) The name of the bucket to be log. Pass null if using <set_vhost()>.
	 * 	target_bucket - _string_ (Required) The name of the bucket to store the logs in.
	 * 	target_prefix - _string_ (Required) The prefix to give to the log filenames.
	 * 	users - _array_ (Optional) Any non-owner users to give access to. Set as an array of key-value pairs: the email address (must be tied to an AWS account) is the key, and the permission is the value. Allowable permissions are <S3_GRANT_READ>, <S3_GRANT_WRITE>, <S3_GRANT_READ_ACP>, <S3_GRANT_WRITE_ACP>, and <S3_GRANT_FULL_CONTROL>.
	 *
	 * Returns:
	 * 	<ResponseCore> object
	 *
	 * See Also:
	 * 	AWS Method - http://docs.amazonwebservices.com/AmazonS3/latest/LoggingAPI.html
	 * 	Permissions - http://docs.amazonwebservices.com/AmazonS3/latest/S3_ACLs.html#S3_ACLs_Permissions
	 * 	Related - <get_logs()>, <enable_logging()>, <disable_logging()>
	 */
	public function enable_logging($bucket, $target_bucket, $target_prefix, $users = null)
	{
		// Add this to our request
		$opt = array();
		$opt['verb'] = HTTP_PUT;
		$opt['method'] = 'enable_logging';

		$xml = simplexml_load_string($this->base_logging_xml);
		$LoggingEnabled = $xml->addChild('LoggingEnabled');
		$LoggingEnabled->addChild('TargetBucket', $target_bucket);
		$LoggingEnabled->addChild('TargetPrefix', $target_prefix);
		$TargetGrants = $LoggingEnabled->addChild('TargetGrants');

		if ($users && is_array($users))
		{
			foreach ($users as $email => $permission)
			{
				$Grant = $TargetGrants->addChild('Grant');
				$Grantee = $Grant->addChild('Grantee');
				$Grantee->addAttribute('xsi:type', 'AmazonCustomerByEmail', 'http://www.w3.org/2001/XMLSchema-instance');
				$Grantee->addChild('EmailAddress', $email);
				$Grant->addChild('Permission', $permission);
			}
		}

		$opt['body'] = $xml->asXML();

=======
	 * Method: list_bucket_object_versions()
	 * 	Gets a list of all the versions of Amazon S3 objects in the specified bucket.
	 *
	 * Access:
	 * 	public
	 *
	 * Parameters:
	 * 	$bucket - _string_ (Required) The name of the bucket to use.
	 * 	$opt - _array_ (Optional) An associative array of parameters that can have the keys listed in the following section.
	 *
	 * Keys for the $opt parameter:
	 * 	delimiter - _string_ (Optional) Unicode string parameter. Keys that contain the same string between the prefix and the first occurrence of the delimiter will be rolled up into a single result element in the CommonPrefixes collection.
	 * 	key-marker - _string_ (Optional) Specifies the key in the bucket that you want to start listing from.
	 * 	max-keys - _string_ (Optional) Limits the number of results returned in response to your query. Will return no more than this number of results, but possibly less.
	 * 	prefix - _string_ (Optional) Restricts the response to only contain results that begin with the specified prefix.
	 * 	version-id-marker - _string_ (Optional) Specifies the object version you want to start listing from.
	 * 	preauth - _integer_|_string_ (Optional) Specifies that a presigned URL for this request should be returned. May be passed as a number of seconds since UNIX Epoch, or any string compatible with `strtotime()`.
	 * 	returnCurlHandle - _boolean_ (Optional) A private toggle specifying that the cURL handle be returned rather than actually completing the request. This toggle is useful for manually managed batch requests.
	 *
	 * Returns:
	 * 	_CFResponse_ A <CFResponse> object containing a parsed HTTP response.
	 */
	public function list_bucket_object_versions($bucket, $opt = null)
	{
		if (!$opt) $opt = array();
		$opt['verb'] = 'GET';
		$opt['sub_resource'] = 'versions';

		foreach (array('delimiter', 'key-marker', 'max-keys', 'prefix', 'version-id-marker') as $param)
		{
			if (isset($opt[$param]))
			{
				$opt['query_string'][$param] = $opt[$param];
				unset($opt[$param]);
			}
		}

>>>>>>> f89d276c08923c32850e8d991a1f67c0cc2e13cb
		// Authenticate to S3
		return $this->authenticate($bucket, $opt);
	}

<<<<<<< HEAD
	/**
	 * Method: disable_logging()
	 * 	Disable access logging.
	 *
	 * Access:
	 * 	public
 	 *
	 * Parameters:
	 * 	bucket - _string_ (Required) The name of the bucket to be used. Pass null if using <set_vhost()>.
	 *
	 * Returns:
	 * 	<ResponseCore> object
	 *
	 * See Also:
	 * 	AWS Method - http://docs.amazonwebservices.com/AmazonS3/latest/LoggingAPI.html
	 * 	Related - <get_logs()>, <enable_logging()>, <disable_logging()>
	 */
	public function disable_logging($bucket)
	{
		// Add this to our request
		$opt = array();
		$opt['verb'] = HTTP_PUT;
		$opt['method'] = 'disable_logging';
		$opt['body'] = $this->base_logging_xml;
=======

	/*%******************************************************************************************%*/
	// BUCKET POLICIES

	/**
	 * Method: set_bucket_policy()
	 * 	Sets the policy sub-resource for the specified Amazon S3 bucket. The specified policy replaces any
	 * 	policy the bucket already has.
	 *
	 * 	To perform this operation, the caller must be authorized to set a policy for the bucket and have
	 * 	PutPolicy permissions. If the caller does not have PutPolicy permissions for the bucket, Amazon S3
	 * 	returns a `403 Access Denied` error. If the caller has the correct permissions but has not been
	 * 	authorized by the bucket owner, Amazon S3 returns a `405 Method Not Allowed` error.
	 *
	 * Access:
	 * 	public
	 *
	 * Parameters:
	 * 	$bucket - _string_ (Required) The name of the bucket to use.
	 * 	$policy - _CFPolicy_ (Required) The JSON policy to use.
	 * 	$opt - _array_ (Optional) An associative array of parameters that can have the keys listed in the following section.
	 *
	 * Keys for the $opt parameter:
	 * 	returnCurlHandle - _boolean_ (Optional) A private toggle specifying that the cURL handle be returned rather than actually completing the request. This toggle is useful for manually managed batch requests.
	 *
	 * Returns:
	 * 	_CFResponse_ A <CFResponse> object containing a parsed HTTP response.
	 *
	 * See Also:
	 * 	- [Appendix: The Access Policy Language](http://docs.amazonwebservices.com/AmazonS3/latest/dev/AccessPolicyLanguage.html)
	 */
	public function set_bucket_policy($bucket, CFPolicy $policy, $opt = null)
	{
		if (!$opt) $opt = array();
		$opt['verb'] = 'PUT';
		$opt['sub_resource'] = 'policy';
		$opt['body'] = $policy->get_json();
>>>>>>> f89d276c08923c32850e8d991a1f67c0cc2e13cb

		// Authenticate to S3
		return $this->authenticate($bucket, $opt);
	}

<<<<<<< HEAD

	/*%******************************************************************************************%*/
	// CONVENIENCE METHODS

	/**
	 * Method: store_remote_file()
	 * 	Takes an existing remote URL, stores it to S3, and returns a URL for the stored copy. For creating new objects in S3, use the <create_object()> method.
	 *
	 * Access:
	 * 	public
 	 *
	 * Parameters:
 	 * 	remote_file - _string_ (Required) The full URL of the file to store on the S3 service.
	 * 	bucket - _string_ (Required) The name of the bucket to be used.
	 * 	filename - _string_ (Required) The filename for the object.
	 * 	opt - _array_ (Required) Associative array of parameters which can have the following keys:
	 *
	 * Keys for the $opt parameter:
	 * 	acl - _string_ (Optional) One of the following options: <S3_ACL_PRIVATE>, <S3_ACL_PUBLIC>, <S3_ACL_OPEN>, or <S3_ACL_AUTH_READ>. Defaults to <S3_ACL_PRIVATE>.
	 * 	overwrite - _boolean_ (Optional) If set to true, checks to see if the file exists and will overwrite the old data with new data. Defaults to false.
	 *
	 * Returns:
	 * 	_string_ The S3 URL for the uploaded file. Returns null if unsuccessful.
	 */
	public function store_remote_file($remote_file, $bucket, $filename, $opt = null)
	{
		// Set default values.
		$acl = S3_ACL_PUBLIC;
		$overwrite = false;
		$cname = null;

		if ($opt)
		{
			// Break the options out.
			extract($opt);
		}

		// Does the file already exist?
		$object = $this->head_object($bucket, $filename);

		// As long as it doesn't already exist, fetch and store it.
		if (!$object->isOK() || $overwrite)
		{
			// Fetch the file
			$file = new $this->request_class($remote_file);
			$file->send_request();

			// Store it in S3
			unset($object);
			$object = $this->create_object($bucket, array(
				'filename' => $filename,
				'body' => $file->get_response_body(),
				'contentType' => $file->get_response_header('content-type'),
				'acl' => $acl
			));
		}

		// Was the request successful?
		if ($object->isOK())
		{
			$url = $object->header['x-cloudfusion-requesturl'];

			// If we have a virtual host value, use that instead of Amazon's hostname. There are better ways of doing this, but it works for now.
			if ($this->vhost)
			{
				$url = str_ireplace('http://', '', $url);
				$url = explode('/', $url);
				$url[0] = $this->vhost;
				$url = 'http://' . implode('/', $url);
			}

			return $url;
		}
		else
		{
			return null;
		}
	}

	/**
	 * Method: change_content_type()
	 * 	Changes the content type for an existing object.
	 *
	 * Access:
	 * 	public
 	 *
	 * Parameters:
	 * 	bucket - _string_ (Required) The name of the bucket to be used.
	 * 	filename - _string_ (Required) The filename for the object.
	 * 	contentType - _string_ (Required) The content-type to apply to the object.
	 * 	returnCurlHandle - _boolean_ (Optional) A private toggle that will return the CURL handle for the request rather than actually completing the request. This is useful for MultiCURL requests.
	 *
	 * Returns:
	 * 	<ResponseCore> object
	 */
	public function change_content_type($bucket, $filename, $contentType, $returnCurlHandle = null)
	{
		return $s3->copy_object($bucket, $filename, $bucket, $filename, array(
			'contentType' => $contentType,
			'metadataDirective' => 'REPLACE',
			'returnCurlHandle' => $returnCurlHandle
		));
=======
	/**
	 * Method: get_bucket_policy()
	 * 	Gets the policy of the specified Amazon S3 bucket.
	 *
	 * 	To use this operation, the caller must have GetPolicy permissions for the specified bucket and must be
	 * 	the bucket owner. If the caller does not have GetPolicy permissions, this method will generate a
	 * 	`403 Access Denied` error. If the caller has the correct permissions but is not the bucket owner, this
	 * 	method will generate a `405 Method Not Allowed` error. If the bucket does not have a policy defined for
	 * 	it, this method will generate a `404 Policy Not Found` error.
	 *
	 * Access:
	 * 	public
	 *
	 * Parameters:
	 * 	$bucket - _string_ (Required) The name of the bucket to use.
	 * 	$opt - _array_ (Optional) An associative array of parameters that can have the keys listed in the following section.
	 *
	 * Keys for the $opt parameter:
	 * 	returnCurlHandle - _boolean_ (Optional) A private toggle specifying that the cURL handle be returned rather than actually completing the request. This toggle is useful for manually managed batch requests.
	 *
	 * Returns:
	 * 	_CFResponse_ A <CFResponse> object containing a parsed HTTP response.
	 */
	public function get_bucket_policy($bucket, $opt = null)
	{
		if (!$opt) $opt = array();
		$opt['verb'] = 'GET';
		$opt['sub_resource'] = 'policy';

		// Authenticate to S3
		return $this->authenticate($bucket, $opt);
	}

	/**
	 * Method: delete_bucket_policy()
	 * 	Deletes the bucket policy for the specified Amazon S3 bucket. To delete the policy, the caller must
	 * 	be the bucket owner and have `DeletePolicy` permissions for the specified bucket.
	 *
	 * Access:
	 * 	public
	 *
	 * Parameters:
	 * 	$bucket - _string_ (Required) The name of the bucket to use.
	 * 	$opt - _array_ (Optional) An associative array of parameters that can have the keys listed in the following section.
	 *
	 * Keys for the $opt parameter:
	 * 	returnCurlHandle - _boolean_ (Optional) A private toggle specifying that the cURL handle be returned rather than actually completing the request. This toggle is useful for manually managed batch requests.
	 *
	 * Returns:
	 * 	_CFResponse_ A <CFResponse> object containing a parsed HTTP response. If you do not have `DeletePolicy` permissions, Amazon S3 returns a `403 Access Denied` error. If you have the correct permissions, but are not the bucket owner, Amazon S3 returns a `405 Method Not Allowed` error. If the bucket doesn't have a policy, Amazon S3 returns a `204 No Content` error.
	 */
	public function delete_bucket_policy($bucket, $opt = null)
	{
		if (!$opt) $opt = array();
		$opt['verb'] = 'DELETE';
		$opt['sub_resource'] = 'policy';

		// Authenticate to S3
		return $this->authenticate($bucket, $opt);
>>>>>>> f89d276c08923c32850e8d991a1f67c0cc2e13cb
	}


	/*%******************************************************************************************%*/
<<<<<<< HEAD
	// URLS

	/**
	 * Method: get_object_url()
	 * 	Gets the web-accessible URL for the file or generates a time-limited signed request for a private file.
	 *
	 * Access:
	 * 	public
 	 *
	 * Parameters:
	 * 	bucket - _string_ (Required) The name of the bucket to be used.
	 * 	filename - _string_ (Required) The filename for the object.
	 * 	qsa - _integer_ (Optional) How many seconds should the query string authenticated URL work for? Only generates query string authentication parameters if value is greater than 0. Defaults to 0.
	 * 	torrent - _boolean_ (Optional) Whether to return the torrent version of the URL or not. Defaults to false.
	 *
	 * Returns:
	 * 	_string_ The file URL (with authentication and/or torrent parameters if requested).
	 *
	 * See Also:
	 * 	Query String Authentication - http://docs.amazonwebservices.com/AmazonS3/latest/S3_QSAuth.html
	 * 	Related - <get_torrent_url()>
	 */
	public function get_object_url($bucket, $filename, $qsa = 0, $torrent = false)
	{
		if ($qsa)
		{
			// Add this to our request
			$opt = array();
			$opt['verb'] = HTTP_GET;
			$opt['method'] = 'get_object_url';
			$opt['filename'] = $filename . (($torrent) ? '?torrent' : '');
			$opt['qsa'] = $qsa;

			// Adjust the clock
			$old_offset = $this->adjust_offset;
			$this->adjust_offset($qsa);

			// Authenticate to S3
			$data = $this->authenticate($bucket, $opt);

			// Reset the clock
			$this->adjust_offset = $old_offset;

			if ($this->vhost)
			{
				return 'http://' . $this->vhost . $data['filename'] . ((!$torrent) ? '?' : '&') . 'AWSAccessKeyId=' . $data['key'] . '&Expires=' . $data['expires'] . '&Signature=' . rawurlencode($data['signature']);
			}

			return 'http://' . $data['bucket'] . '.s3.amazonaws.com' . $data['filename'] . ((!$torrent) ? '?' : '&') . 'AWSAccessKeyId=' . $data['key'] . '&Expires=' . $data['expires'] . '&Signature=' . rawurlencode($data['signature']);
		}
		else
		{
			// If we're using a virtual host, use that instead.
			if ($this->vhost)
			{
				return 'http://' . $this->vhost . '/' . $filename . (($torrent) ? '?torrent' : '');
			}

			return 'http://' . $bucket . '.s3.amazonaws.com/' . $filename . (($torrent) ? '?torrent' : '');
		}
	}

	/**
	 * Method: get_torrent_url()
	 * 	Gets the web-accessible torrent URL for the file (assuming you've set the ACL settings to <S3_ACL_PUBLIC>).
	 *
	 * Access:
	 * 	public
 	 *
	 * Parameters:
	 * 	bucket - _string_ (Required) The name of the bucket to be used.
	 * 	filename - _string_ (Required) The filename for the object.
	 * 	qsa - _integer_ (Optional) How many seconds should the query string authenticated URL work for? Only generates query string authentication parameters if value is greater than 0. Defaults to 0.
	 *
	 * Returns:
 	* 	_string_ The torrent URL (with authentication parameters if requested).
	 *
	 * See Also:
	 * 	AWS Method - http://docs.amazonwebservices.com/AmazonS3/latest/index.html?S3TorrentRetrieve.html
	 * 	Related - <get_object_url()>
	 */
	public function get_torrent_url($bucket, $filename, $qsa = 0)
	{
		if ($qsa)
		{
			return $this->get_object_url($bucket, $filename, $qsa, true);
		}
		return $this->get_object_url($bucket, $filename, 0 , true);
	}


	/*%******************************************************************************************%*/
	// ACCESS CONTROL POLICY

	/**
	 * Method: generate_access_policy()
	 * 	Generate the XML to be used for the Access Control Policy.
	 *
	 * Access:
	 * 	public
 	 *
	 * Parameters:
	 * 	canonical_id - _string_ (Required) The Canonical ID for the Owner. Use the <AWS_CANONICAL_ID> constant or the 'id' value from <get_canonical_user_id()>.
	 * 	canonical_name - _string_ (Required) The Canonical Display Name for the Owner. Use the <AWS_CANONICAL_NAME> constant or the 'display_name' value from <get_canonical_user_id()>.
	 * 	users - _array_ (Optional) Array of associative arrays. Each associative array contains an 'id' and a 'permission'.
	 *
	 * Returns:
	 * 	_string_ Access Control Policy XML.
	 *
	 * See Also:
	 * 	AWS Method - http://docs.amazonwebservices.com/AmazonS3/latest/S3_ACLs.html
	 */
	public function generate_access_policy($canonical_id, $canonical_name, $users)
	{
		$xml = simplexml_load_string($this->base_acp_xml);
		$owner = $xml->addChild('Owner');
		$owner->addChild('ID', $canonical_id);
		$owner->addChild('DisplayName', $canonical_name);
		$acl = $xml->addChild('AccessControlList');

		foreach ($users as $user)
		{
			$grant = $acl->addChild('Grant');
			$grantee = $grant->addChild('Grantee');

			switch ($user['id'])
			{
				// Authorized Users
				case S3_USERS_AUTH:
					$grantee->addAttribute('xsi:type', 'Group', 'http://www.w3.org/2001/XMLSchema-instance');
					$grantee->addChild('URI', S3_USERS_AUTH);
					break;

				// All Users
				case S3_USERS_ALL:
					$grantee->addAttribute('xsi:type', 'Group', 'http://www.w3.org/2001/XMLSchema-instance');
					$grantee->addChild('URI', S3_USERS_ALL);
					break;

				// The Logging User
				case S3_USERS_LOGGING:
					$grantee->addAttribute('xsi:type', 'Group', 'http://www.w3.org/2001/XMLSchema-instance');
					$grantee->addChild('URI', S3_USERS_LOGGING);
					break;

				// Email Address or Canonical Id
				default:
					if (strpos($user['id'],'@'))
					{
						$grantee->addAttribute('xsi:type', 'AmazonCustomerByEmail', 'http://www.w3.org/2001/XMLSchema-instance');
						$grantee->addChild('EmailAddress', $user['id']);
					}
					else
					{
						// Assume Canonical Id
						$grantee->addAttribute('xsi:type', 'CanonicalUser', 'http://www.w3.org/2001/XMLSchema-instance');
						$grantee->addChild('ID', $user['id']);
					}
					break;
			}

			$grant->addChild('Permission', $user['permission']);
		}

		return $xml->asXML();
	}

	/**
	 * Method: get_canonical_user_id()
	 * 	Obtains the CanonicalUser ID and DisplayName from the server.
	 *
	 * Access:
	 * 	public
 	 *
	 * Returns:
 	 * 	_array_ The id and display_name values.
	 */
	public function get_canonical_user_id()
	{
		$id = $this->list_buckets();
		return array(
			'id' => (string) $id->body->Owner->ID,
			'display_name' => (string) $id->body->Owner->DisplayName
		);
	}

	/**
	 * Method: authorize_upload()
	 * 	Authorizes a browser based upload.
	 *
	 * Access:
	 * 	public
 	 *
	 * Parameters:
	 *	conditions - _array_ (Required) Associative array of policy conditions. Conditions must match those sent from the form.
	 *	expires - _int_ (Optional) Time in seconds until the policy expires. Defaults to 1 hour.
	 *
	 * Keys for the $opt parameter:
	 * 	bucket - _string_ (Required) Bucket to authorize the upload to.
	 *	key - _string_ (Required) Either this, or a starts-with for key must be specified.
	 *	acl - _string_ (Optional) Values: private, public-read, public-read-write, authenticated-read, bucket-owner-read, bucket-owner-full-control
	 *	success_action_redirect - _string_ (Optional) URL to redirect to on successful upload. Alias is "redirect".
	 *	Content-Type - _string_ (Optional) Content typpe of the file.
	 *	Cache-Control - _string_ (Optional)
	 *	Content-Disposition - _string_ (Optional)
	 *	Content-Encoding - _string_ (Optional)
	 *	Expires - _string_ (Optional)
	 *	x-amz-meta-... - _string_ (Optional) User metadata.
	 * 	starts-with - _array_ (Optional) Array of associative arrays of any of the above keys and the prefix value to match. Ex. array(array('$key',$prefix),array('$Content-Type','')).
	 *	success_action_status - _int_ (Optional) Status code to return if success_action_redirect is not specified.
	 *	x-amz-security-token - _string_ (Optional) Amazon DevPay security token. Must contain product and user token seperated by a comma in the string.
	 *	content-length-range - _array_ (Optional) Content range to be uploaded. Useful for setting the minimum and maximum file size. Ex. array(min,max).
	 *
	 * Returns:
 	 * 	_array_ Base64 encoded policy and signature strings.
	 *
	 * See Also
	 *	Browser-Based Uploads - http://docs.amazonwebservices.com/AmazonS3/latest/UsingHTTPPOST.html
	 */
	public function authorize_upload($conditions, $expires = 3600)
	{
		if (isset($conditions['starts-with']))
		{
			foreach($conditions['starts-with'] as $prefix)
			{
				$conditions_array[] = array('starts-with', $prefix[0], $prefix[1]);
			}
			unset($conditions['starts-with']);
		}

		if (isset($conditions['content-length-range']))
		{
			$conditions_array[] = array('content-length-range', $conditions['content-length-range'][0], $conditions['content-length-range'][1]);
			unset($conditions['content-length-range']);
		}

		foreach (array_keys($conditions) as $condition)
		{
			$conditions_array[] = array($condition=>$conditions[$condition]);
		}

		$policy = array(
			'expiration' => gmdate(DATE_FORMAT_ISO8601, time() + $expires),
			'conditions' => $conditions_array
		);

		$policyToSign = $this->util->json_encode($policy);

		// Base64 encode the policy
		$policy_encoded = base64_encode($policyToSign);

		// Hash the AWS secret key and generate a signature for the request.
		$signature = base64_encode(hash_hmac('sha1', $policy_encoded, $this->secret_key, true));

		return array(
			$policy_encoded,
			$signature
=======
	// BUCKET NOTIFICATIONS

	/**
	 * Method: create_bucket_notification()
	 * 	Enables notifications of specified events for an Amazon S3 bucket. Currently, the
	 * 	`s3:ReducedRedundancyLostObject` event is the only event supported for notifications. The
	 * 	`s3:ReducedRedundancyLostObject` event is triggered when Amazon S3 detects that it has lost all
	 * 	copies of an Amazon S3 object and can no longer service requests for that object.
	 *
	 * 	If the bucket owner and Amazon SNS topic owner are the same, the bucket owner has permission to
	 * 	publish notifications to the topic by default. Otherwise, the owner of the topic must create a
	 * 	policy to enable the bucket owner to publish to the topic.
	 *
	 * 	By default, only the bucket owner can configure notifications on a bucket. However, bucket owners
	 * 	can use bucket policies to grant permission to other users to set this configuration with the
	 * 	`s3:PutBucketNotification` permission.
	 *
	 * 	After a PUT operation is called to configure notifications on a bucket, Amazon S3 publishes a test
	 * 	notification to ensure that the topic exists and that the bucket owner has permission to publish
	 * 	to the specified topic. If the notification is successfully published to the SNS topic, the PUT
	 * 	operation updates the bucket configuration and returns the 200 OK responses with a
	 * 	`x-amz-sns-test-message-id` header containing the message ID of the test notification sent to topic.
	 *
	 * Access:
	 * 	public
	 *
	 * Parameters:
	 * 	$bucket - _string_ (Required) The name of the bucket to create bucket notifications for.
	 * 	$topic_arn - _string_ (Required) The SNS topic ARN to send notifications to.
	 * 	$event - _string_ (Required) The event type to listen for.
	 * 	$opt - _array_ (Optional) An associative array of parameters that can have the keys listed in the following section.
	 *
	 * Keys for the $opt parameter:
	 * 	returnCurlHandle - _boolean_ (Optional) A private toggle specifying that the cURL handle be returned rather than actually completing the request. This toggle is useful for manually managed batch requests.
	 *
	 * Returns:
	 * 	_CFResponse_ A <CFResponse> object containing a parsed HTTP response.
	 *
	 * See Also:
	 * 	- [Setting Up Notification of Bucket Events](http://docs.amazonwebservices.com/AmazonS3/latest/dev/NotificationHowTo.html)
	 */
	public function create_bucket_notification($bucket, $topic_arn, $event, $opt = null)
	{
		if (!$opt) $opt = array();
		$opt['verb'] = 'PUT';
		$opt['sub_resource'] = 'notification';

		$xml = simplexml_load_string($this->base_notification_xml);
		$topic_config = $xml->addChild('TopicConfiguration');
		$topic_config->addChild('Topic', $topic_arn);
		$topic_config->addChild('Event', $event);

		$opt['body'] = $xml->asXML();

		// Authenticate to S3
		return $this->authenticate($bucket, $opt);
	}

	/**
	 * Method: get_bucket_notifications()
	 * 	Gets the notification configuration of a bucket. Currently, the `s3:ReducedRedundancyLostObject` event
	 * 	is the only event supported for notifications. The `s3:ReducedRedundancyLostObject` event is triggered
	 * 	when Amazon S3 detects that it has lost all replicas of a Reduced Redundancy Storage object and can no
	 * 	longer service requests for that object.
	 *
	 * 	If notifications are not enabled on the bucket, the operation returns an empty
	 * 	`NotificatonConfiguration` element.
	 *
	 * 	By default, you must be the bucket owner to read the notification configuration of a bucket. However,
	 * 	the bucket owner can use a bucket policy to grant permission to other users to read this configuration
	 * 	with the `s3:GetBucketNotification` permission.
	 *
	 * Access:
	 * 	public
	 *
	 * Parameters:
	 * 	$bucket - _string_ (Required) The name of the bucket to use.
	 * 	$opt - _array_ (Optional) An associative array of parameters that can have the keys listed in the following section.
	 *
	 * Keys for the $opt parameter:
	 * 	returnCurlHandle - _boolean_ (Optional) A private toggle specifying that the cURL handle be returned rather than actually completing the request. This toggle is useful for manually managed batch requests.
	 *
	 * Returns:
	 * 	_CFResponse_ A _CFResponse_ A <CFResponse> object containing a parsed HTTP response.
	 *
	 * See Also:
	 * 	- [Setting Up Notification of Bucket Events](http://docs.amazonwebservices.com/AmazonS3/latest/dev/NotificationHowTo.html)
	 */
	public function get_bucket_notifications($bucket, $opt = null)
	{
		if (!$opt) $opt = array();
		$opt['verb'] = 'GET';
		$opt['sub_resource'] = 'notification';

		// Authenticate to S3
		return $this->authenticate($bucket, $opt);
	}

	/**
	 * Method: delete_bucket_notification()
	 * 	Empties the list of SNS topics to send notifications to.
	 *
	 * Access:
	 * 	public
	 *
	 * Parameters:
	 * 	$bucket - _string_ (Required) The name of the bucket to use.
	 * 	$opt - _array_ (Optional) An associative array of parameters that can have the keys listed in the following section.
	 *
	 * Keys for the $opt parameter:
	 * 	returnCurlHandle - _boolean_ (Optional) A private toggle specifying that the cURL handle be returned rather than actually completing the request. This toggle is useful for manually managed batch requests.
	 *
	 * Returns:
	 * 	_CFResponse_ A <CFResponse> object containing a parsed HTTP response.
	 *
	 * See Also:
	 * 	- [Setting Up Notification of Bucket Events](http://docs.amazonwebservices.com/AmazonS3/latest/dev/NotificationHowTo.html)
	 */
	public function delete_bucket_notification($bucket, $opt = null)
	{
		if (!$opt) $opt = array();
		$opt['verb'] = 'PUT';
		$opt['sub_resource'] = 'notification';
		$opt['body'] = $this->base_notification_xml;

		// Authenticate to S3
		return $this->authenticate($bucket, $opt);
	}


	/*%******************************************************************************************%*/
	// MISCELLANEOUS

	/**
	 * Method: get_canonical_user_id()
	 * 	Gets the canonical user ID and display name from the Amazon S3 server.
	 *
	 * Access:
	 * 	public
	 *
	 * Returns:
	 * 	_array_ An associative array containing the `id` and `display_name` values.
	 */
	public function get_canonical_user_id()
	{
		if ($this->use_batch_flow)
		{
			throw new S3_Exception(__FUNCTION__ . '() cannot be batch requested');
		}

		$id = $this->list_buckets();

		return array(
			'id' => (string) $id->body->Owner->ID,
			'display_name' => (string) $id->body->Owner->DisplayName
>>>>>>> f89d276c08923c32850e8d991a1f67c0cc2e13cb
		);
	}
}

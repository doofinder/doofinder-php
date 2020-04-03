<?php
/**
 * IndicesTest
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Doofinder Management API
 *
 * # Introduction  Doofinder's management API allows you to perform some of the administrative tasks you can do on your search engines using the Doofinder control panel, directly from your code.  # Basics  ## Endpoint  All requests should be done via `https` to the right endpoint:  ``` https://{search-zone}-api.doofinder.com ```  Where `{search-zone}` is the code of the datacenter where your search engines are located.  For instance:  ``` https://eu1-api.doofinder.com https://us1-api.doofinder.com ```  ## Authentication  To authenticate you need a management API key. If you don't have one you can generate it in the Doofinder Admin by going to your Account and then to API Keys.  A valid API key looks like this:  ``` ab46030xza33960aac71a10248489b6c26172f07 ```  ### API Token  You can authenticate with the previous API key in header as a Token. The correct way to authenticate is to send a HTTP Header with the name `Authorization` and the value `Token {api-key}`  I.e.:  ``` Authorization: Token ab46030xza33960aac71a10248489b6c26172f07 ```  ### JWT Token (Draft)  If you prefer you can authenticate with a [JSON Web Token](https://jwt.io). The token must be signed with an API management key and there are some claims required in the JWT payload. These claims are:    * `iat` (issued at): Creation datetime timestamp, i.e. the moment when the JWT was created.    * `exp` (expiration time): Expiration datetime timestamp, i.e. the moment when the JWT is going to expire and will no longer be valid. The time span between issued and expiration dates must be shorter than a week.    * `name`: Your user code. It is your unique identifier as doofinder user. You can find this code in your profile page in the Doofinder's administration panel.  To authenticate using JWT you must send a HTTP header with the name `Authorization` and the value `Bearer {JWT-token}`.  I.e.:  ``` Authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJuYW1lIjoidGVzdCIsImlhdCI6MTUxNjIzOTAyMn0.QX_3HF-T2-vlvzGDbAzZyc1Cd-J9qROSes3bxlgB4uk ```  ## Conventions  Along most of the code samples you will find placeholders for some common variable values. They are:    * `{hashid}`: The search engine's unique id. e.g.: d8fdeab7fce96a19d3fc7b0ca7a1e98b.    * `{index}`: When storing items, they're always stored under a certain _index_. e.g.: product.    * `{token}`: Your personal authentication token obtained in the control panel.    * `{uid}`: The unique identificator of a Doofinder User.  # Objects  ## Search Engines  A **search engine**:  - Consists of a set of indices and options to configure them. - Must contain at least one index. - Can be uniquely identified by a hash we call `hashid`. - Can be _processed_, which involves reading the data from the provided data sources (usually URLs), indexing the data in temporary indices and finally make the indices ready for use.  ## Indices  An **index**:  - Is a set of **data items** and options to describe those items, the description of the **data sources** to get them and the way they can be searched. - May have one (and only one) temporary index. A temporary index shares the same options of the main index. There are operations to manage temporary indices like create, delete, reindex, etc.  The usual flow for an index is to create a temporary index, index items on it and replace the main index with the temporary one.  This way you can reindex your whole data having zero downtime of the search service.  ## Data Sources  A **data source**:  - Defines the location for retrieving items for indexing and the most common is just a file URL. - Is accessed when the search engine is being processed.  An index does not need a data source if you index the items directly using the API.  ## Items  Items:  - Are the objects stored in an index. - Are returned as search results. - May have different schemas (collections of fields) depending on their index **preset** (if any). There are some default presets, being `product` the most usual, which describes items with a price, category, etc.
 *
 * OpenAPI spec version: 2.0
 * Contact: support@doofinder.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.18
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Please update the test case below to test the model.
 */

namespace Swagger\Client;

/**
 * IndicesTest Class Doc Comment
 *
 * @category    Class
 * @description A list of indices from the search engine.
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class IndicesTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Setup before running any test case
     */
    public static function setUpBeforeClass()
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {
    }

    /**
     * Test "Indices"
     */
    public function testIndices()
    {
    }
}

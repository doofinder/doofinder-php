<?php
/**
 * SearchEnginesApiTest
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
 * # Introduction Doofinder's management API allows you to perform the same administrative tasks you can do on your search engines using the doofinder control panel, directly from your code.  You could found here our legacy [Management API V1](https://www.doofinder.com/support/developer/api/management-api).  # Basics ## Endpoint All requests should be done with `https` protocol in our api location.  `https://{search_zone}-api.doofinder.com`  where `{search_zone}` depends on your location, is the geographic zone your search engine is located at. i.e.: eu1. Also, indicates which host to use in your API calls.  ## Authentication  We provide two methods of authentication for our API. In any of theese you need a management api key that you could obtain in our [management control panel](https://www.doofinder.com/admin).  You can generate it in your user account -> Api Keys.  Example of the generated API Key: `eu1-ab46030xza33960aac71a10248489b6c26172f07`  ### API Token You could authenticate with the previous API key in header as a Token. The correct way to authenticate is to send a HTTP Header with the name `Authorization` and the value `Token <API Key>`  For example, for the key shown above:  `Authorization: Token eu1-ab46030xza33960aac71a10248489b6c26172f07`  ### JWT Token (Draft) Also you could authenticate with a JSON Web Token generating jwt keys with your API Key. To authenticate using JWT you need to send a HTTP Header with the name `Authorization` and the value `Bearer <JWT token>`.  For example, with the key shown above:  `Authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJuYW1lIjoidGVzdCIsImlhdCI6MTUxNjIzOTAyMn0.QX_3HF-T2-vlvzGDbAzZyc1Cd-J9qROSes3bxlgB4uk`  ## Conventions Along most of the code samples you will find placeholders for some common variable values. They are:  - `{hashid}`: The search engine's unique id. i.e.: d8fdeab7fce96a19d3fc7b0ca7a1e98b - `{index}`: When storing items, they're always stored under a certain \"index\". i.e.: product. - `{token}`: Your personal authentication token obtained in the control panel. - `{uid}`: The Id of a Doofinder User
 *
 * OpenAPI spec version: 2.0
 * Contact: support@doofinder.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.18
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Please update the test case below to test the endpoint.
 */

namespace Swagger\Client;

use Swagger\Client\Configuration;
use Swagger\Client\ApiException;
use Swagger\Client\ObjectSerializer;

/**
 * SearchEnginesApiTest Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SearchEnginesApiTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Setup before running any test cases
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
     * Test case for process
     *
     * Process Search Engine Data Sources.
     *
     */
    public function testProcess()
    {
    }

    /**
     * Test case for processStatus
     *
     * .
     *
     */
    public function testProcessStatus()
    {
    }

    /**
     * Test case for searchEngineCreate
     *
     * Create new search engine.
     *
     */
    public function testSearchEngineCreate()
    {
    }

    /**
     * Test case for searchEngineDelete
     *
     * Delete a search engine.
     *
     */
    public function testSearchEngineDelete()
    {
    }

    /**
     * Test case for searchEngineList
     *
     * List search engines.
     *
     */
    public function testSearchEngineList()
    {
    }

    /**
     * Test case for searchEngineShow
     *
     * Get a search engine.
     *
     */
    public function testSearchEngineShow()
    {
    }

    /**
     * Test case for searchEngineUpdate
     *
     * Update a search engine.
     *
     */
    public function testSearchEngineUpdate()
    {
    }
}

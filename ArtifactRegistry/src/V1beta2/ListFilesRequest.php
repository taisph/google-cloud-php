<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/artifactregistry/v1beta2/file.proto

namespace Google\Cloud\ArtifactRegistry\V1beta2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request to list files.
 *
 * Generated from protobuf message <code>google.devtools.artifactregistry.v1beta2.ListFilesRequest</code>
 */
class ListFilesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The name of the repository whose files will be listed. For example:
     * "projects/p1/locations/us-central1/repositories/repo1
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     */
    private $parent = '';
    /**
     * An expression for filtering the results of the request. Filter rules are
     * case insensitive. The fields eligible for filtering are:
     *   * `name`
     *   * `owner`
     *  An example of using a filter:
     *   * `name="projects/p1/locations/us-central1/repositories/repo1/files/a/b/&#42;"` --> Files with an
     *   ID starting with "a/b/".
     *   * `owner="projects/p1/locations/us-central1/repositories/repo1/packages/pkg1/versions/1.0"` -->
     *   Files owned by the version `1.0` in package `pkg1`.
     *
     * Generated from protobuf field <code>string filter = 4;</code>
     */
    private $filter = '';
    /**
     * The maximum number of files to return.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     */
    private $page_size = 0;
    /**
     * The next_page_token value returned from a previous list request, if any.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     */
    private $page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           The name of the repository whose files will be listed. For example:
     *           "projects/p1/locations/us-central1/repositories/repo1
     *     @type string $filter
     *           An expression for filtering the results of the request. Filter rules are
     *           case insensitive. The fields eligible for filtering are:
     *             * `name`
     *             * `owner`
     *            An example of using a filter:
     *             * `name="projects/p1/locations/us-central1/repositories/repo1/files/a/b/&#42;"` --> Files with an
     *             ID starting with "a/b/".
     *             * `owner="projects/p1/locations/us-central1/repositories/repo1/packages/pkg1/versions/1.0"` -->
     *             Files owned by the version `1.0` in package `pkg1`.
     *     @type int $page_size
     *           The maximum number of files to return.
     *     @type string $page_token
     *           The next_page_token value returned from a previous list request, if any.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Devtools\Artifactregistry\V1Beta2\File::initOnce();
        parent::__construct($data);
    }

    /**
     * The name of the repository whose files will be listed. For example:
     * "projects/p1/locations/us-central1/repositories/repo1
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * The name of the repository whose files will be listed. For example:
     * "projects/p1/locations/us-central1/repositories/repo1
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * An expression for filtering the results of the request. Filter rules are
     * case insensitive. The fields eligible for filtering are:
     *   * `name`
     *   * `owner`
     *  An example of using a filter:
     *   * `name="projects/p1/locations/us-central1/repositories/repo1/files/a/b/&#42;"` --> Files with an
     *   ID starting with "a/b/".
     *   * `owner="projects/p1/locations/us-central1/repositories/repo1/packages/pkg1/versions/1.0"` -->
     *   Files owned by the version `1.0` in package `pkg1`.
     *
     * Generated from protobuf field <code>string filter = 4;</code>
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * An expression for filtering the results of the request. Filter rules are
     * case insensitive. The fields eligible for filtering are:
     *   * `name`
     *   * `owner`
     *  An example of using a filter:
     *   * `name="projects/p1/locations/us-central1/repositories/repo1/files/a/b/&#42;"` --> Files with an
     *   ID starting with "a/b/".
     *   * `owner="projects/p1/locations/us-central1/repositories/repo1/packages/pkg1/versions/1.0"` -->
     *   Files owned by the version `1.0` in package `pkg1`.
     *
     * Generated from protobuf field <code>string filter = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setFilter($var)
    {
        GPBUtil::checkString($var, True);
        $this->filter = $var;

        return $this;
    }

    /**
     * The maximum number of files to return.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * The maximum number of files to return.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * The next_page_token value returned from a previous list request, if any.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * The next_page_token value returned from a previous list request, if any.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

}


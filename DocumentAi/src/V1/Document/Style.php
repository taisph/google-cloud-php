<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/documentai/v1/document.proto

namespace Google\Cloud\DocumentAI\V1\Document;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Annotation for common text style attributes. This adheres to CSS
 * conventions as much as possible.
 *
 * Generated from protobuf message <code>google.cloud.documentai.v1.Document.Style</code>
 */
class Style extends \Google\Protobuf\Internal\Message
{
    /**
     * Text anchor indexing into the [Document.text][google.cloud.documentai.v1.Document.text].
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.Document.TextAnchor text_anchor = 1;</code>
     */
    private $text_anchor = null;
    /**
     * Text color.
     *
     * Generated from protobuf field <code>.google.type.Color color = 2;</code>
     */
    private $color = null;
    /**
     * Text background color.
     *
     * Generated from protobuf field <code>.google.type.Color background_color = 3;</code>
     */
    private $background_color = null;
    /**
     * Font weight. Possible values are normal, bold, bolder, and lighter.
     * https://www.w3schools.com/cssref/pr_font_weight.asp
     *
     * Generated from protobuf field <code>string font_weight = 4;</code>
     */
    private $font_weight = '';
    /**
     * Text style. Possible values are normal, italic, and oblique.
     * https://www.w3schools.com/cssref/pr_font_font-style.asp
     *
     * Generated from protobuf field <code>string text_style = 5;</code>
     */
    private $text_style = '';
    /**
     * Text decoration. Follows CSS standard.
     * <text-decoration-line> <text-decoration-color> <text-decoration-style>
     * https://www.w3schools.com/cssref/pr_text_text-decoration.asp
     *
     * Generated from protobuf field <code>string text_decoration = 6;</code>
     */
    private $text_decoration = '';
    /**
     * Font size.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.Document.Style.FontSize font_size = 7;</code>
     */
    private $font_size = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\DocumentAI\V1\Document\TextAnchor $text_anchor
     *           Text anchor indexing into the [Document.text][google.cloud.documentai.v1.Document.text].
     *     @type \Google\Type\Color $color
     *           Text color.
     *     @type \Google\Type\Color $background_color
     *           Text background color.
     *     @type string $font_weight
     *           Font weight. Possible values are normal, bold, bolder, and lighter.
     *           https://www.w3schools.com/cssref/pr_font_weight.asp
     *     @type string $text_style
     *           Text style. Possible values are normal, italic, and oblique.
     *           https://www.w3schools.com/cssref/pr_font_font-style.asp
     *     @type string $text_decoration
     *           Text decoration. Follows CSS standard.
     *           <text-decoration-line> <text-decoration-color> <text-decoration-style>
     *           https://www.w3schools.com/cssref/pr_text_text-decoration.asp
     *     @type \Google\Cloud\DocumentAI\V1\Document\Style\FontSize $font_size
     *           Font size.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Documentai\V1\Document::initOnce();
        parent::__construct($data);
    }

    /**
     * Text anchor indexing into the [Document.text][google.cloud.documentai.v1.Document.text].
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.Document.TextAnchor text_anchor = 1;</code>
     * @return \Google\Cloud\DocumentAI\V1\Document\TextAnchor|null
     */
    public function getTextAnchor()
    {
        return isset($this->text_anchor) ? $this->text_anchor : null;
    }

    public function hasTextAnchor()
    {
        return isset($this->text_anchor);
    }

    public function clearTextAnchor()
    {
        unset($this->text_anchor);
    }

    /**
     * Text anchor indexing into the [Document.text][google.cloud.documentai.v1.Document.text].
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.Document.TextAnchor text_anchor = 1;</code>
     * @param \Google\Cloud\DocumentAI\V1\Document\TextAnchor $var
     * @return $this
     */
    public function setTextAnchor($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DocumentAI\V1\Document\TextAnchor::class);
        $this->text_anchor = $var;

        return $this;
    }

    /**
     * Text color.
     *
     * Generated from protobuf field <code>.google.type.Color color = 2;</code>
     * @return \Google\Type\Color|null
     */
    public function getColor()
    {
        return isset($this->color) ? $this->color : null;
    }

    public function hasColor()
    {
        return isset($this->color);
    }

    public function clearColor()
    {
        unset($this->color);
    }

    /**
     * Text color.
     *
     * Generated from protobuf field <code>.google.type.Color color = 2;</code>
     * @param \Google\Type\Color $var
     * @return $this
     */
    public function setColor($var)
    {
        GPBUtil::checkMessage($var, \Google\Type\Color::class);
        $this->color = $var;

        return $this;
    }

    /**
     * Text background color.
     *
     * Generated from protobuf field <code>.google.type.Color background_color = 3;</code>
     * @return \Google\Type\Color|null
     */
    public function getBackgroundColor()
    {
        return isset($this->background_color) ? $this->background_color : null;
    }

    public function hasBackgroundColor()
    {
        return isset($this->background_color);
    }

    public function clearBackgroundColor()
    {
        unset($this->background_color);
    }

    /**
     * Text background color.
     *
     * Generated from protobuf field <code>.google.type.Color background_color = 3;</code>
     * @param \Google\Type\Color $var
     * @return $this
     */
    public function setBackgroundColor($var)
    {
        GPBUtil::checkMessage($var, \Google\Type\Color::class);
        $this->background_color = $var;

        return $this;
    }

    /**
     * Font weight. Possible values are normal, bold, bolder, and lighter.
     * https://www.w3schools.com/cssref/pr_font_weight.asp
     *
     * Generated from protobuf field <code>string font_weight = 4;</code>
     * @return string
     */
    public function getFontWeight()
    {
        return $this->font_weight;
    }

    /**
     * Font weight. Possible values are normal, bold, bolder, and lighter.
     * https://www.w3schools.com/cssref/pr_font_weight.asp
     *
     * Generated from protobuf field <code>string font_weight = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setFontWeight($var)
    {
        GPBUtil::checkString($var, True);
        $this->font_weight = $var;

        return $this;
    }

    /**
     * Text style. Possible values are normal, italic, and oblique.
     * https://www.w3schools.com/cssref/pr_font_font-style.asp
     *
     * Generated from protobuf field <code>string text_style = 5;</code>
     * @return string
     */
    public function getTextStyle()
    {
        return $this->text_style;
    }

    /**
     * Text style. Possible values are normal, italic, and oblique.
     * https://www.w3schools.com/cssref/pr_font_font-style.asp
     *
     * Generated from protobuf field <code>string text_style = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setTextStyle($var)
    {
        GPBUtil::checkString($var, True);
        $this->text_style = $var;

        return $this;
    }

    /**
     * Text decoration. Follows CSS standard.
     * <text-decoration-line> <text-decoration-color> <text-decoration-style>
     * https://www.w3schools.com/cssref/pr_text_text-decoration.asp
     *
     * Generated from protobuf field <code>string text_decoration = 6;</code>
     * @return string
     */
    public function getTextDecoration()
    {
        return $this->text_decoration;
    }

    /**
     * Text decoration. Follows CSS standard.
     * <text-decoration-line> <text-decoration-color> <text-decoration-style>
     * https://www.w3schools.com/cssref/pr_text_text-decoration.asp
     *
     * Generated from protobuf field <code>string text_decoration = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setTextDecoration($var)
    {
        GPBUtil::checkString($var, True);
        $this->text_decoration = $var;

        return $this;
    }

    /**
     * Font size.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.Document.Style.FontSize font_size = 7;</code>
     * @return \Google\Cloud\DocumentAI\V1\Document\Style\FontSize|null
     */
    public function getFontSize()
    {
        return isset($this->font_size) ? $this->font_size : null;
    }

    public function hasFontSize()
    {
        return isset($this->font_size);
    }

    public function clearFontSize()
    {
        unset($this->font_size);
    }

    /**
     * Font size.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.Document.Style.FontSize font_size = 7;</code>
     * @param \Google\Cloud\DocumentAI\V1\Document\Style\FontSize $var
     * @return $this
     */
    public function setFontSize($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DocumentAI\V1\Document\Style\FontSize::class);
        $this->font_size = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Style::class, \Google\Cloud\DocumentAI\V1\Document_Style::class);


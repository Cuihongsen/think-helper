<?php
/**
 * @link http://www.cuiframework.com/
 * @copyright Copyright (c) 2008 cui Software LLC
 * @license http://www.cuiframework.com/license/
 */

namespace cui\think\helper;

/**
 * Markdown provides an ability to transform markdown into HTML.
 *
 * Basic usage is the following:
 *
 * ```php
 * $myHtml = Markdown::process($myText); // use original markdown flavor
 * $myHtml = Markdown::process($myText, 'gfm'); // use github flavored markdown
 * $myHtml = Markdown::process($myText, 'extra'); // use markdown extra
 * ```
 *
 * You can configure multiple flavors using the [[$flavors]] property.
 *
 * For more details please refer to the [Markdown library documentation](https://github.com/cebe/markdown#readme).
 *
 * @author Carsten Brandt <mail@cebe.cc>
 * @since 2.0
 */
class Markdown extends BaseMarkdown
{
}

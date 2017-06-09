<?php
/**
 * @link http://www.cuiframework.com/
 * @copyright Copyright (c) 2008 cui Software LLC
 * @license http://www.cuiframework.com/license/
 */

namespace cui\think\helpers;

/**
 * Object that represents the removal of array value while performing [[ArrayHelper::merge()]].
 *
 * Usage example:
 *
 * ```php
 * $array1 = [
 *     'ids' => [
 *         1,
 *     ],
 *     'validDomains' => [
 *         'example.com',
 *         'www.example.com',
 *     ],
 * ];
 *
 * $array2 = [
 *     'ids' => [
 *         2,
 *     ],
 *     'validDomains' => new \cui\think\helpers\UnsetArrayValue(),
 * ];
 *
 * $result = \cui\think\helpers\ArrayHelper::merge($array1, $array2);
 * ```
 *
 * The result will be
 *
 * ```php
 * [
 *     'ids' => [
 *         1,
 *         2,
 *     ],
 * ]
 * ```
 *
 * @author Robert Korulczyk <robert@korulczyk.pl>
 * @since 2.0.10
 */
class UnsetArrayValue
{
}

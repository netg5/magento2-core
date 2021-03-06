<?php
/**
 * A Magento 2 module named Codepeak_Optimize
 * Copyright (C) 2018 Codepeak AB 2018
 *
 * This file is part of Codepeak_Optimize.
 *
 * Codepeak_Optimize is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 */

namespace Codepeak\Core\Logger;

/**
 * Class Handler
 *
 * @package  Codepeak\Core\Logger
 * @license  GNU License http://www.gnu.org/licenses/
 * @author   Robert Lord, Codepeak AB <robert@codepeak.se>
 * @link     https://codepeak.se
 */
class Handler extends \Magento\Framework\Logger\Handler\Base
{
    /**
     * @var int
     */
    protected $loggerType = Logger::INFO;

    /**
     * @var string
     */
    protected $fileName = '/var/log/codepeak.log';
}
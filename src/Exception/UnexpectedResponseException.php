<?php

/*
 * The PHP SDK for BillaBear.
 * Copyright (C) 2023  Humbly Arrogant Software Limited
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <https://www.gnu.org/licenses/>.
 *
 */

namespace BillaBear\PhpSdk\Exception;

use BillaBear\PhpSdk\Response;

class UnexpectedResponseException extends \Exception
{
    public function __construct(private Response $response)
    {
        parent::__construct(sprintf('Unexpected response from server - status code: %d', $this->response->getStatusCode()));
    }

    public function getResponse(): Response
    {
        return $this->response;
    }
}

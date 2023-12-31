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

namespace BillaBear\PhpSdk;

use BillaBear\PhpSdk\Exception\MissingFieldsException;
use BillaBear\PhpSdk\Exception\NotFoundException;
use BillaBear\PhpSdk\Exception\ServerValidationException;
use BillaBear\PhpSdk\Exception\UnauthorizedException;
use BillaBear\PhpSdk\Exception\UnexpectedResponseException;

interface ClientInterface
{
    /**
     * @throws MissingFieldsException
     * @throws ServerValidationException
     * @throws UnauthorizedException
     * @throws UnexpectedResponseException
     */
    public function createCustomer(array $input): array;

    /**
     * @throws UnauthorizedException
     * @throws UnexpectedResponseException
     * @throws NotFoundException
     */
    public function fetchCustomer(string $id): array;

    /**
     * @throws UnauthorizedException
     * @throws UnexpectedResponseException
     * @throws NotFoundException
     */
    public function fetchCustomerLimits(string $id): array;

    /**
     * @throws UnauthorizedException
     * @throws UnexpectedResponseException
     * @throws NotFoundException
     */
    public function fetchCustomerPayments(string $id): array;

    /**
     * @throws UnauthorizedException
     * @throws UnexpectedResponseException
     * @throws NotFoundException
     */
    public function fetchCustomerRefunds(string $id): array;

    /**
     * @throws MissingFieldsException
     * @throws ServerValidationException
     * @throws UnauthorizedException
     * @throws UnexpectedResponseException
     * @throws NotFoundException
     */
    public function updateCustomer(string $id, array $payload): array;

    /**
     * @throws UnauthorizedException
     * @throws UnexpectedResponseException
     * @throws NotFoundException
     */
    public function disableCustomer(string $id): void;

    /**
     * @throws UnauthorizedException
     * @throws UnexpectedResponseException
     * @throws NotFoundException
     */
    public function enableCustomer(string $id): void;

    /**
     * @throws UnauthorizedException
     * @throws UnexpectedResponseException
     * @throws NotFoundException
     */
    public function fetchRefund(string $id): array;

    /**
     * @throws UnauthorizedException
     * @throws UnexpectedResponseException
     * @throws NotFoundException
     */
    public function fetchFrontendToken(string $id): string;

    /**
     * @throws MissingFieldsException
     * @throws ServerValidationException
     * @throws UnauthorizedException
     * @throws UnexpectedResponseException
     * @throws NotFoundException
     */
    public function completeFrontendToken(string $id, string $token): array;

    /**
     * @throws UnauthorizedException
     * @throws UnexpectedResponseException
     * @throws NotFoundException
     */
    public function deletePaymentDetails(string $customerId, string $paymentDetailsId): void;

    /**
     * @throws UnauthorizedException
     * @throws UnexpectedResponseException
     * @throws NotFoundException
     */
    public function makePaymentDetailsDefault(string $customerId, string $paymentDetailsId): void;

    /**
     * @throws MissingFieldsException
     * @throws ServerValidationException
     * @throws UnauthorizedException
     * @throws UnexpectedResponseException
     * @throws NotFoundException
     */
    public function startSubscriptionWithIds(string $customerId, string $subscriptionPlanId, string $priceId): array;

    /**
     * @throws MissingFieldsException
     * @throws ServerValidationException
     * @throws UnauthorizedException
     * @throws UnexpectedResponseException
     * @throws NotFoundException
     */
    public function startSubscriptionWithCurrencyAndSchedule(string $customerId, string $subscriptionPlan, string $currency, string $schedule): array;

    /**
     * @throws ServerValidationException
     * @throws UnauthorizedException
     * @throws UnexpectedResponseException
     * @throws NotFoundException
     */
    public function cancelSubscription(string $subscriptionId, string $when = 'instantly', string $refundType = 'none'): void;

    /**
     * @throws ServerValidationException
     * @throws UnauthorizedException
     * @throws UnexpectedResponseException
     * @throws NotFoundException
     */
    public function changeSubscription(string $subscriptionId, string $subscriptionPlanId, string $priceId, string $when = 'none'): void;

    /**
     * @throws UnauthorizedException
     * @throws UnexpectedResponseException
     * @throws NotFoundException
     */
    public function fetchSubscription(string $subscriptionId): array;
}

<?php
/**
 * This file is a part of "furqansiddiqui/bitcoind-rpc" package.
 * https://github.com/furqansiddiqui/bitcoind-rpc
 *
 * Copyright (c) 2019 Furqan A. Siddiqui <hello@furqansiddiqui.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code or visit following link:
 * https://github.com/furqansiddiqui/bitcoind-rpc/blob/master/LICENSE
 */

declare(strict_types=1);

namespace BitcoinRPC\Http;

/**
 * Class AuthBasic
 * @package BitcoinRPC\Http
 */
class AuthBasic
{
    /** @var null|string */
    private $user;
    /** @var null|string */
    private $password;

    /**
     * @param string $user
     * @return AuthBasic
     */
    public function username(string $user): self
    {
        $this->user = $user;
        return $this;
    }

    /**
     * @param string $password
     * @return AuthBasic
     */
    public function password(string $password): self
    {
        $this->password = $password;
        return $this;
    }
}
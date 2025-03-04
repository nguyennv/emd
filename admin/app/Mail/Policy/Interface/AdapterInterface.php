<?php declare(strict_types=1);

namespace App\Mail\Policy\Interface;

/**
 * Policy server adapter interface
 *
 * @package  App
 * @category Mail
 * @author   Nguyen Van Nguyen - nguyennv@iwayvietnam.com
 */
interface AdapterInterface
{
    const POLICY_NAME = "Access Policy";
    const POLICY_WORKER = 4;
    const POLICY_DAEMONIZE = true;
    const LISTEN_HOST = "0.0.0.0";
    const LISTEN_PORT = 1403;

    /**
     * Handle policy
     *
     * @param PolicyInterface $policy
     * @return void
     */
    function handle(PolicyInterface $policy): void;
}

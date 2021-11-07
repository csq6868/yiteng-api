<?php

namespace yiteng\api\concerns;

use yiteng\api\request\DefaultRequests;
use yiteng\api\request\douyin\DouyinRequests;

/**
 * @method DouyinRequests douyin()
 */
trait InteractsWithRequest
{
    use DefaultRequests;
}

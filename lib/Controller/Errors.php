<?php
declare(strict_types=1);
// SPDX-FileCopyrightText: JUSTENE NKWAGOH TAMAH <tamhjustin@gmail.com>
// SPDX-License-Identifier: AGPL-3.0-or-later

namespace OCA\TestApp\Controller;

use Closure;

use OCP\AppFramework\Http;
use OCP\AppFramework\Http\DataResponse;

use OCA\TestApp\Service\NoteNotFound;

trait Errors {
	protected function handleNotFound(Closure $callback): DataResponse {
		try {
			return new DataResponse($callback());
		} catch (NoteNotFound $e) {
			$message = ['message' => $e->getMessage()];
			return new DataResponse($message, Http::STATUS_NOT_FOUND);
		}
	}
}

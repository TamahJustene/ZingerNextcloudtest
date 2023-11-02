<?php
declare(strict_types=1);
// SPDX-FileCopyrightText: JUSTENE NKWAGOH TAMAH <tamhjustin@gmail.com>
// SPDX-License-Identifier: AGPL-3.0-or-later

namespace OCA\TestApp\Tests\Unit\Controller;

use OCA\TestApp\Controller\NoteApiController;

class NoteApiControllerTest extends NoteControllerTest {
	public function setUp(): void {
		parent::setUp();
		$this->controller = new NoteApiController($this->request, $this->service, $this->userId);
	}
}

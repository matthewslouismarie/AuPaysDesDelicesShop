<?php

class Image {
	private $url;
	private $width;
	private $height;

	public function __construct( ?string $url, ?int $width, ?int $height ) {
		$this->url = $url;
		$this->width = $width;
		$this->height = $height;
	}

	public function has_url(): bool {
		return $this->url !== null;
	}

	public function has_width(): bool {
		return $this->width !== null;
	}

	public function has_height(): bool {
		return $this->height !== null;
	}

	public function get_url(): ?string {
		return $this->url;
	}

	public function get_width(): ?int {
		return $this->width;
	}

	public function get_height(): ?int {
		return $this->height;
	}
}
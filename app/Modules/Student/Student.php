<?php
declare(strict_types=1);
namespace App\Modules\Student;
class Student {
	public function __construct(
		private ?int $id,
		private string $name,
		private string $email,
		private string $deletedAt,
		private string $createdAt,
		private string $updatedAt,
	) {
	}

	public function getId(): ?int {
		return $this->id;
	}
	public function getName(): string {
		return $this->name;
	}
	public function getEmail(): string {
		return $this->email;
	}
	public function getDeletedAt(): string {
		return $this->deletedAt;
	}
	public function getCreatedAt(): string {
		return $this->createdAt;
	}
	public function getUpdatedAt(): string {
		return $this->updatedAt;
	}

	public function toArray(): array {
		return [ 
			"id" => $this->getId(),
			"name" => $this->getName(),
			"email" => $this->getEmail(),
			"createdAt" => $this->getCreatedAt(),
			"updatedAt" => $this->getUpdatedAt(),
			"deletedAt" => $this->getDeletedAt(),
		];
	}
	public function toSQL(): array {
		return [ 
			"id" => $this->getId(),
			"name" => $this->getName(),
			"email" => $this->getEmail(),
			"created_at" => $this->getCreatedAt(),
			"updated_at" => $this->getUpdatedAt(),
			"deleted_at" => $this->getDeletedAt(),
		];
	}
}

<?php
declare(strict_types=1);
session_start();
require_once __DIR__ . '/../db/conexion.php';

// Detectar base URL automáticamente
$BASE_URL = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/\\') . '/';

if (empty($_SESSION['csrf'])) {
  $_SESSION['csrf'] = bin2hex(random_bytes(32));
}
function csrf_field(): string {
  return '<input type="hidden" name="csrf" value="'.htmlspecialchars($_SESSION['csrf']).'">';
}
function check_csrf($t): bool {
  return isset($_SESSION['csrf']) && hash_equals($_SESSION['csrf'], (string)$t);
}
function h(?string $s): string { return htmlspecialchars($s ?? '', ENT_QUOTES, 'UTF-8'); }

// Flash messages
function flash_set(string $type, string $msg): void { $_SESSION['flash'] = [$type, $msg]; }
function flash_get(): ?array { $f = $_SESSION['flash'] ?? null; unset($_SESSION['flash']); return $f; }

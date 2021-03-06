<?php


namespace BaleBot\Model;


use BaleBot\Model;

/**
 * Class SendMessage
 * @package BaleBot\Model
 *
 * @property string $nickName
 * @property string $randomId
 * @property Model\Message\Voice $message
 */
class SendVoiceMessage extends SendMessage
{
	protected $relations = [
		'message' => Model\Message\Voice::class,
	];
}
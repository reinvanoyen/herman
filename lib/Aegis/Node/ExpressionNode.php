<?php

namespace Aegis\Node;

use Aegis\Token;

class ExpressionNode extends Node
{
	public static function parse( $parser )
	{
		if(
			StringNode::parse( $parser ) ||
			VariableNode::parse( $parser ) ||
			NumberNode::parse( $parser ) ||
			ListNode::parse( $parser ) ||
			FunctionCallNode::parse( $parser )
		) {
			if( ! $parser->getScope() instanceof ExpressionNode ) {

				// Insert the expression and move inside
				$parser->wrap( new static() );
			}

			if( Operator::parse( $parser ) ) {
				
				self::parse( $parser );

			} else {
				
				$parser->traverseDown();
			}

			return TRUE;
		}

		return FALSE;
	}

	public function compile( $compiler )
	{
		foreach( $this->getChildren() as $c ) {

			$c->compile( $compiler );
		}
	}
}
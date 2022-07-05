#!/bin/bash

xenc(){
	local din ptr dout val1
	din="$1"
	for ((ptr=0; ptr<${#din}; ptr++)); do
		val1=0x$(xxd -l1 -p <<< "${din:ptr:1}")
		if (( (( val1 ^ XKEY )) == 0 )); then
			dout+=$(printf '\\x%02x' "${val1}")
		else
			dout+=$(printf '\\x%02x' "$((val1 ^ XKEY))")
		fi
	done
	echo -n "${dout}"
}

XKEY="0x5e"
xenc "GPB{x000000000000000red}"

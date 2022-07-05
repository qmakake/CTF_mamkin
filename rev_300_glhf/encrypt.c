#include <stdio.h>
#include <stdlib.h>
#include <stdint.h>

#include "encrypt.h"

static long get_file_size(FILE *file){
	long size;
	fseek(file, 0, SEEK_END);
	size = ftell(file);
	rewind(file);
	return size;
}

int main(int argc, char **argv){
	if (argc != 2)
		exit(-1);
	FILE *file = fopen(argv[1], "rb");
	if (!file)
		exit(-2);
	long size = get_file_size(file);
	unsigned char *data = malloc(size);
	if (!data)
		exit(-3);
	if (fread(data, size, 1, file) != 1)
		exit(-4);
	fclose(file);
	uint32_t key = 0xdeadbeef;
	do_encrypt(data, size, key);
	for (int i = 0; i < size; i++)
		printf("0x%02x,", data[i]);
	return 0;
}

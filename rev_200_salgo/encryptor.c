#define _GNU_SOURCE

#include <stdio.h>
#include <string.h>
#include <stdlib.h>

static void add(char* p){
	for(int i = 0; i < strlen(p); i++)
		if(p[i] + i + 30)
			p[i] += i + 30;
}

int main(int argc, char* argv[]){
	char* string = strdup(argv[1]);
	add(string);
	printf("%s",string);
	free(string);
	return 0;
}

#include <stdio.h>

int age;
age = 20;
int main() {
    int score;
    printf("Enter your score: ");
    scanf("%d", &score);

    if (score >= 90) {
        printf("Passed with an A\n");
    } else if (score < 90 && score >= 70) {
        printf("Promoted with merit\n");
    } else if (score < 70 && score >= 50) {
        printf("Failed\n");
    } else {
        printf("Failed\n");
    }
}

printf("%d", age);